import {
  FileText,
  Inbox,
  GitCompare,
  Briefcase,
  CheckCircle2,
} from "lucide-react";

export function ProcessSteps() {
  const steps = [
    {
      icon: FileText,
      title: "Completezi formularul",
      description: "Trimite-ne câteva informații simple despre nevoile tale.",
    },
    {
      icon: Inbox,
      title: "Primești oferte",
      description: "Analizăm și negociem cu băncile partenere în numele tău.",
    },
    {
      icon: GitCompare,
      title: "Compari și alegi",
      description: "Îți prezentăm cele mai bune oferte personalizate pentru tine.",
    },
    {
      icon: Briefcase,
      title: "Broker pregătește dosarul",
      description: "Ne ocupăm de toată birocrația și documentația necesară.",
    },
    {
      icon: CheckCircle2,
      title: "Obții creditul aprobat",
      description: "Semnezi contractul și primești banii în cont rapid.",
    },
  ];

  return (
    <section id="process" className="py-16 bg-white">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">
            Cum Obții Creditul în 5 Pași Simpli
          </h2>
          <p className="text-gray-600 max-w-2xl mx-auto">
            Procesul nostru este simplu, transparent și rapid. De la aplicare
            la aprobare, te ghidăm în fiecare etapă.
          </p>
        </div>

        {/* Desktop Timeline */}
        <div className="hidden lg:block max-w-6xl mx-auto">
          <div className="relative">
            {/* Connection Line */}
            <div className="absolute top-12 left-0 right-0 h-1 bg-[#0066CC]/20">
              <div
                className="h-full bg-[#0066CC] transition-all duration-1000"
                style={{ width: "100%" }}
              />
            </div>

            {/* Steps */}
            <div className="relative grid grid-cols-5 gap-4">
              {steps.map((step, index) => (
                <div key={index} className="text-center">
                  <div className="relative inline-flex items-center justify-center w-24 h-24 bg-white border-4 border-[#0066CC] rounded-full mb-4 shadow-lg">
                    <step.icon className="w-10 h-10 text-[#0066CC]" />
                  </div>
                  <div className="text-[#003D7A] mb-2">{step.title}</div>
                  <p className="text-sm text-gray-600">{step.description}</p>
                </div>
              ))}
            </div>
          </div>

          <div className="text-center mt-12 bg-[#F5F7FA] rounded-lg p-4 max-w-md mx-auto">
            <p className="text-[#003D7A]">
              ⏱️ Procesul durează 2-3 zile în medie
            </p>
          </div>
        </div>

        {/* Mobile/Tablet Vertical Timeline */}
        <div className="lg:hidden space-y-6">
          {steps.map((step, index) => (
            <div key={index} className="flex gap-4">
              <div className="flex-shrink-0">
                <div className="relative inline-flex items-center justify-center w-16 h-16 bg-white border-4 border-[#0066CC] rounded-full shadow-lg">
                  <step.icon className="w-7 h-7 text-[#0066CC]" />
                </div>
                {index < steps.length - 1 && (
                  <div className="w-1 h-16 bg-[#0066CC]/20 mx-auto mt-2" />
                )}
              </div>
              <div className="flex-1 pt-2">
                <div className="text-[#003D7A] mb-2">{step.title}</div>
                <p className="text-sm text-gray-600">{step.description}</p>
              </div>
            </div>
          ))}

          <div className="bg-[#F5F7FA] rounded-lg p-4 text-center mt-8">
            <p className="text-[#003D7A]">
              ⏱️ Procesul durează 2-3 zile în medie
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}