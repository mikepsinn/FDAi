import { NavBar } from '@/app/(frontpage)/components/nav-bar'
import { HeroSection } from '@/app/(frontpage)/components/hero-section'
import { FailedInnovationSection } from '@/app/(frontpage)/components/failed-innovation-section'
import { OpenSourceSection } from '@/app/(frontpage)/components/open-source-section'
import { DemocratizeSection } from '@/app/(frontpage)/components/democratize-section'
import { CollaborationSection } from '@/app/(frontpage)/components/collaboration-section'
import { CollaboratorsSection } from '@/app/(frontpage)/components/collaborators-section'
import { DiagramSection } from '@/app/(frontpage)/components/diagram-section'
import { GradientBlur } from '@/app/(frontpage)/components/gradient-blur'
import { Footer } from '@/app/(frontpage)/components/footer'

export default function Home() {
  return (
    <main className="min-h-screen bg-[#13111a] overflow-hidden">
      <NavBar />
      <HeroSection />

      <div className="relative">
        <GradientBlur
          className="absolute right-[10vw] w-[60vw] h-[60vh] -translate-y-1/2"
          variant="default"
        />
        <DiagramSection />
      </div>

      <div className="relative">
        <GradientBlur
          className="absolute left-[5vw] w-[50vw] h-[60vh] -translate-y-1/4"
          variant="blue-purple"
          rotationDelay="-7s"
        />
        <FailedInnovationSection />
      </div>

      <div className="relative">
        <GradientBlur
          className="absolute right-[5vw] w-[55vw] h-[65vh] -translate-y-1/3"
          variant="default"
          rotationDelay="-12s"
        />
        <OpenSourceSection />
      </div>

      <div className="relative">
        <GradientBlur
          className="absolute left-[10vw] w-[60vw] h-[70vh] -translate-y-1/2"
          variant="blue-purple"
          rotationDelay="-18s"
        />
        <DemocratizeSection />
      </div>

      <div className="relative">
        <GradientBlur
          className="absolute right-[15vw] w-[50vw] h-[60vh] -translate-y-1/4"
          variant="default"
          rotationDelay="-24s"
        />
        <CollaborationSection />
      </div>

      <div className="relative">
        <GradientBlur
          className="absolute left-[20vw] w-[55vw] h-[65vh] -translate-y-1/3"
          variant="blue-purple"
          rotationDelay="-30s"
        />
        <CollaboratorsSection />
      </div>

      <Footer />
    </main>
  )
}

