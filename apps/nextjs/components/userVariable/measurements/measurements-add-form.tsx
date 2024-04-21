'use client';

import * as React from 'react';
import { useRouter } from 'next/navigation';
import { zodResolver } from '@hookform/resolvers/zod';
import { format } from 'date-fns';
import { useForm } from 'react-hook-form';
import * as z from 'zod';

import { cn } from '@/lib/utils';
import { Button } from '@/components/ui/button';
import { Calendar } from '@/components/ui/calendar';
import { CredenzaClose, CredenzaFooter } from '@/components/ui/credenza';
import {
  Form,
  FormControl,
  FormDescription,
  FormField,
  FormItem,
  FormLabel,
  FormMessage
} from '@/components/ui/form';
import {
  Popover,
  PopoverContent,
  PopoverTrigger
} from '@/components/ui/popover';
import { toast } from '@/components/ui/use-toast';
import { Icons } from '@/components/icons';
import { UserVariable } from '@/types/models/UserVariable';

interface MeasurementsAddFormProps {
  userVariable: UserVariable;
  setShowMeasurementAlert: (active: boolean) => void;
}

const FormSchema = z.object({
  date: z.date({
    required_error: 'A date is required.'
  }),
  value: z.number({
    required_error: 'A value is required.'
  })
});

const currentDate = new Date();
currentDate.setHours(0, 0, 0, 0);

type Valence = 'positive' | 'negative' | 'numeric';

const ratingButtons: Record<Valence, { numericValue: number; src: string; title: string; }[]> = {
  positive: [
    {
      numericValue: 1,
      src: 'https://static.quantimo.do/img/rating/face_rating_button_256_depressed.png',
      title: '1/5'
    },
    { numericValue: 2, src: 'https://static.quantimo.do/img/rating/face_rating_button_256_sad.png', title: '2/5' },
    { numericValue: 3, src: 'https://static.quantimo.do/img/rating/face_rating_button_256_ok.png', title: '3/5' },
    { numericValue: 4, src: 'https://static.quantimo.do/img/rating/face_rating_button_256_happy.png', title: '4/5' },
    {
      numericValue: 5,
      src: 'https://static.quantimo.do/img/rating/face_rating_button_256_ecstatic.png',
      title: '5/5'
    }
  ],
  negative: [
    {
      numericValue: 1,
      src: 'https://static.quantimo.do/img/rating/face_rating_button_256_ecstatic.png',
      title: '1/5'
    },
    { numericValue: 2, src: 'https://static.quantimo.do/img/rating/face_rating_button_256_happy.png', title: '2/5' },
    { numericValue: 3, src: 'https://static.quantimo.do/img/rating/face_rating_button_256_ok.png', title: '3/5' },
    { numericValue: 4, src: 'https://static.quantimo.do/img/rating/face_rating_button_256_sad.png', title: '4/5' },
    {
      numericValue: 5,
      src: 'https://static.quantimo.do/img/rating/face_rating_button_256_depressed.png',
      title: '5/5'
    }
  ],
  numeric: [
    { numericValue: 1, src: 'https://static.quantimo.do/img/rating/numeric_rating_button_256_1.png', title: '1/5' },
    { numericValue: 2, src: 'https://static.quantimo.do/img/rating/numeric_rating_button_256_2.png', title: '2/5' },
    { numericValue: 3, src: 'https://static.quantimo.do/img/rating/numeric_rating_button_256_3.png', title: '3/5' },
    { numericValue: 4, src: 'https://static.quantimo.do/img/rating/numeric_rating_button_256_4.png', title: '4/5' },
    { numericValue: 5, src: 'https://static.quantimo.do/img/rating/numeric_rating_button_256_5.png', title: '5/5' }
  ]
};
export function MeasurementsAddForm({ userVariable, setShowMeasurementAlert }: MeasurementsAddFormProps) {
  const router = useRouter();
  const form = useForm<z.infer<typeof FormSchema>>({
    resolver: zodResolver(FormSchema),
    defaultValues: {
      date: currentDate,
      value: userVariable.mostCommonValue // Set default value to userVariable.mostCommonValue
    }
  });
  const [isLoading, setIsLoading] = React.useState<boolean>(false);
  const valence = userVariable.valence;

  let buttons = null;

  if(userVariable.unitAbbreviatedName === '/5' && ratingButtons[valence as Valence]) {
    buttons = ratingButtons[valence as Valence];
  }

  const handleFaceButtonClick = (numericValue: number) => {
    form.setValue('value', numericValue, { shouldValidate: true });
    form.handleSubmit(onSubmit)(); // Trigger form submission after setting the value
  };

  async function onSubmit(data: z.infer<typeof FormSchema>) {
    setIsLoading(true);

    const response = await fetch(`/api/dfda/measurements`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        startAt: data.date,
        value: data.value, // Use the value from the form
        variableId: userVariable.variableId
      })
    });

    if (!response?.ok) {
      toast({
        title: 'Something went wrong.',
        description: 'Your userVariable was not measured. Please try again.',
        variant: 'destructive'
      });
    } else {
      toast({
        description: 'Your userVariable has been measured successfully.'
      });
    }

    setIsLoading(false);
    setShowMeasurementAlert(false);

    router.refresh();
  }

  return (
    <Form {...form}>
      <form
        onSubmit={form.handleSubmit(onSubmit)}
        className="space-y-8 px-4 md:px-0"
      >
        <FormField
          control={form.control}
          name="date"
          render={({ field }) => (
            <FormItem className="flex flex-col">
              <FormLabel>Date</FormLabel>
              <Popover modal={true}>
                <PopoverTrigger asChild>
                  <FormControl>
                    <Button
                      variant={'outline'}
                      className={cn(
                        'w-full pl-3 text-left font-normal sm:w-[320px]',
                        !field.value && 'text-muted-foreground'
                      )}
                    >
                      {field.value ? (
                        format(field.value, 'PPP')
                      ) : (
                        <span>Pick a date</span>
                      )}
                      <Icons.calendar className="ml-auto h-4 w-4 opacity-50" />
                    </Button>
                  </FormControl>
                </PopoverTrigger>
                <PopoverContent className="w-auto p-0" align="start">
                  <Calendar
                    mode="single"
                    selected={field.value}
                    onSelect={field.onChange}
                    disabled={(date) =>
                      date > new Date() || date < new Date('1900-01-01')
                    }
                    initialFocus
                  />
                </PopoverContent>
              </Popover>
              <FormDescription>
                Date of the measured event
              </FormDescription>
              <FormMessage />
            </FormItem>
          )}
        />
        {
          buttons ? (
            <div className="flex justify-around w-full">
              {buttons.map((option: { numericValue: number; src: string; title: string; }) => (
                <img
                  key={option.numericValue}
                  src={option.src}
                  title={option.title}
                  className={`cursor-pointer ${form.watch('value') === option.numericValue ? 'active-primary-outcome-variable-rating-button' : ''} w-auto max-w-[20%]`}
                  onClick={() => handleFaceButtonClick(option.numericValue)}
                  alt={`Rating ${option.numericValue}`}
                />
              ))}
            </div>
          ) : (
            <FormField
              control={form.control}
              name="value"
              render={({ field }) => (
                <FormItem className="flex flex-col">
                  <FormLabel>{userVariable.name} Value</FormLabel>
                  <FormControl>
                    <div className="flex items-center">
                      <input
                        id="value-input"
                        type="number"
                        className="w-full"
                        min={userVariable.minimumAllowedValue} // Set minimum allowed value
                        max={userVariable.maximumAllowedValue} // Set maximum allowed value
                        {...field}
                      />
                      <span className="ml-2">{userVariable.unitAbbreviatedName}</span>
                    </div>
                  </FormControl>
                  <FormDescription>
                    Value of the measurement
                  </FormDescription>
                  <FormMessage />
                </FormItem>
              )}
            />
          )
        }
        <CredenzaFooter className="flex flex-col-reverse">
          <CredenzaClose asChild>
            <Button variant="outline">Cancel</Button>
          </CredenzaClose>
          <Button type="submit" disabled={isLoading}>
            {isLoading ? (
              <Icons.spinner className="mr-2 h-4 w-4 animate-spin" />
            ) : (
              <Icons.add className="mr-2 h-4 w-4" />
            )}
            <span>Record measurement</span>
          </Button>
        </CredenzaFooter>
      </form>
    </Form>
  );
}
