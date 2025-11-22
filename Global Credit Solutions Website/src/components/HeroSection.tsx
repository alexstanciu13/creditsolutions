import { Button } from "./ui/button";
import { CreditCalculator } from "./CreditCalculator";

export function HeroSection() {
  const navigate = (hash: string) => {
    window.location.hash = hash;
  };
  return (
    <section
      id="hero"
      className="relative bg-gradient-to-br from-[#003D7A] to-[#001f3f] pt-32 pb-16 md:pt-40 md:pb-24"
    >
      {/* Background Pattern */}
      <div className="absolute inset-0 opacity-5">
        <div
          className="absolute inset-0"
          style={{
            backgroundImage: `url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E")`,
          }}
        />
      </div>

      <div className="container mx-auto px-4 relative">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Left Content */}
          <div className="text-white">
            <h1 className="text-white mb-6 text-3xl md:text-4xl lg:text-5xl">
              Găsește rapid cel mai bun credit pentru nevoile tale
            </h1>
            <p className="text-xl text-gray-200 mb-8">
              Soluții de creditare personalizate | Comparare oferte de la 30+ bănci
            </p>

            <div className="flex flex-col sm:flex-row gap-4">
              <Button
                size="lg"
                onClick={() => navigate("contact")}
                className="bg-white text-[#003D7A] hover:bg-gray-100 rounded-lg transition-all shadow-lg"
              >
                Aplică Acum
              </Button>
              <Button
                size="lg"
                variant="outline"
                onClick={() => {
                  const calculator = document.getElementById("calculator");
                  if (calculator) {
                    calculator.scrollIntoView({ behavior: "smooth" });
                  }
                }}
                className="border-2 border-white text-white bg-transparent hover:bg-white hover:text-[#003D7A] rounded-lg transition-all"
              >
                Calculează rata ta
              </Button>
            </div>

            {/* Trust Badges */}
            <div className="mt-12 flex flex-wrap gap-6 items-center">
              <div className="flex items-center gap-2">
                <div className="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center">
                  <svg
                    className="w-6 h-6 text-white"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth={2}
                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                    />
                  </svg>
                </div>
                <div className="text-sm">
                  <div>Autorizat</div>
                  <div className="text-gray-300">ANPC</div>
                </div>
              </div>

              <div className="flex items-center gap-2">
                <div className="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center">
                  <svg
                    className="w-6 h-6 text-white"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth={2}
                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                    />
                  </svg>
                </div>
                <div className="text-sm">
                  <div>SSL</div>
                  <div className="text-gray-300">Certificat</div>
                </div>
              </div>
            </div>
          </div>

          {/* Right Content - Calculator */}
          <div className="lg:ml-auto w-full lg:max-w-md">
            <CreditCalculator />
          </div>
        </div>
      </div>
    </section>
  );
}