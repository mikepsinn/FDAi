"use client";
import { EmptyPlaceholder } from "@/components/empty-placeholder";
import { Icons } from "@/components/icons";

import { UserVariableAddButton } from "./user-variable-add-button";
import { UserVariableItem } from "./user-variable-item";
import { FC, useEffect, useState } from "react";
import { UserVariable } from "@/types/models/UserVariable";

type UserVariableListProps = {
  user: {
    id: string;
  };
  searchParams: {
    includePublic?: boolean | null;
    sort?: string | null;
    limit?: number | null;
    offset?: number | null;
    searchPhrase?: string | null;
  };
};

export const UserVariableList: FC<UserVariableListProps> = ({ user, searchParams }) => {

  const [userVariables, setUserVariables] = useState<UserVariable[]>([]);

  useEffect(() => {
    // Ensure searchParams is an object
    const safeSearchParams = searchParams ?? {};

    // Construct query string from searchParams
    const queryParams = new URLSearchParams();
    Object.entries(safeSearchParams).forEach(([key, value]) => {
      if (value !== null && value !== undefined) {
        queryParams.append(key, value.toString());
      }
    });

    const queryString = queryParams.toString();
    const url = `/api/dfda/variables${queryString ? `?${queryString}` : ''}`;

    fetch(url)
      .then(response => response.json())
      .then(userVariables => {
        setUserVariables(userVariables);
      })
      .catch(error => console.error('Error fetching user variables:', error));

  }, [user, searchParams]);

  return (
    <>
      {userVariables?.length ? (
        <div className="flex flex-col"> {/* Add Tailwind classes here */}
          {userVariables.map((userVariable) => (
            <UserVariableItem key={userVariable.id} userVariable={userVariable} />
          ))}
        </div>
      ) : (
        <EmptyPlaceholder>
          <div className="flex h-20 w-20 items-center justify-center rounded-full bg-muted">
            <Icons.activity className="h-10 w-10" />
          </div>
          <EmptyPlaceholder.Title>Get Started!</EmptyPlaceholder.Title>
          <EmptyPlaceholder.Description>
            Add a symptom, food or treatment to start tracking!
          </EmptyPlaceholder.Description>
          <UserVariableAddButton variant="outline" />
        </EmptyPlaceholder>
      )}
    </>
  )
}
