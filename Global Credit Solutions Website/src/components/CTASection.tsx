import { Button } from "./ui/button";
import { ShieldCheck } from "lucide-react";

export function CTASection() {
  const navigate = (hash: string) => {
    window.location.hash = hash;
  };
  return (
    <section className="py-16 bg-gradient-to-r from-[#0066CC] to-[#003D7A]">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto text-center">
          <div className="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6">
            <ShieldCheck className="w-8 h-8 text-white" />
          </div>

          <h2 className="text-white mb-4 text-2xl md:text-3xl">
            Gata să începi procesul de aplicare?
          </h2>

          <p className="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
            În 5 minute completezi formularul. Restul e treaba noastră.
            Te ajutăm să găsești cea mai bună soluție de creditare.
          </p>

          <Button
            size="lg"
            onClick={() => navigate("contact")}
            className="bg-white text-[#003D7A] hover:bg-gray-100 rounded-lg shadow-xl transition-all hover:scale-105"
          >
            Aplică Acum
          </Button>

          <div className="mt-8 flex flex-wrap justify-center gap-8 text-white/80 text-sm">
            <div className="flex items-center gap-2">
              <svg
                className="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M5 13l4 4L19 7"
                />
              </svg>
              <span>Proces Rapid</span>
            </div>
            <div className="flex items-center gap-2">
              <svg
                className="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M5 13l4 4L19 7"
                />
              </svg>
              <span>Fără Obligații</span>
            </div>
            <div className="flex items-center gap-2">
              <svg
                className="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M5 13l4 4L19 7"
                />
              </svg>
              <span>Date Protejate SSL</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}