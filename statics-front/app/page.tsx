import Image from "next/image";
import Features from "@/app/components/solar/ui/Features"
import { Hero } from "@/app/components/solar/ui/Hero"

export default function Home() {
  return (
    <main className="relative mx-auto flex flex-col">
      <div className="pt-56">
        <Hero />
      </div>
      <div className="mt-48 px-4 xl:px-0">
        <Features />
      </div>
    </main>
  );
}
