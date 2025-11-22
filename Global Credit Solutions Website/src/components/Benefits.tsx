import {
  DollarSign,
  Building2,
  TrendingDown,
  FileCheck,
  Zap,
  Shield,
} from "lucide-react";

export function Benefits() {
  const benefits = [
    {
      icon: DollarSign,
      title: "Comisioane Competitive",
      description:
        "Oferim servicii de brokeraj cu comisioane transparente și competitive. Te ajutăm să economisești timp și bani în procesul de creditare.",
    },
    {
      icon: Building2,
      title: "Acces la Toate Băncile",
      description:
        "Avem parteneriate cu peste 30 de bănci și instituții financiare. Comparăm toate ofertele pentru tine.",
    },
    {
      icon: TrendingDown,
      title: "Dobânzi Negociate Mai Bune",
      description:
        "Datorită volumului mare de credite intermediate, obținem condiții mai avantajoase decât dacă te-ai duce singur la bancă.",
    },
    {
      icon: FileCheck,
      title: "Suport Complet",
      description:
        "Te asistăm din momentul aplicării până la semnarea contractului. Pregătim dosarul și documentația necesară.",
    },
    {
      icon: Zap,
      title: "Soluții Rapide și Transparente",
      description:
        "Primești răspuns în cel mai scurt timp. Fără taxe ascunse, fără surprize neplăcute. Totul e clar de la început.",
    },
    {
      icon: Shield,
      title: "Nu Afectează Scorul de Credit",
      description:
        "Consultarea noastră și compararea ofertelor nu implică interogări ale Biroului de Credit care să îți afecteze scorul.",
    },
  ];

  return (
    <section className="py-16 bg-white">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">De Ce Să Alegi Global Credit Solutions?</h2>
          <p className="text-gray-600 max-w-2xl mx-auto">
            Suntem partenerii tăi de încredere în obținerea celui mai bun
            credit. Iată ce ne face diferiți.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
          {benefits.map((benefit, index) => (
            <div
              key={index}
              className={`flex gap-4 p-6 rounded-xl ${
                index % 2 === 0 ? "bg-[#F5F7FA]" : "bg-white border-2 border-[#F5F7FA]"
              }`}
            >
              <div className="flex-shrink-0">
                <div className="w-12 h-12 bg-[#0066CC] rounded-lg flex items-center justify-center">
                  <benefit.icon className="w-6 h-6 text-white" />
                </div>
              </div>
              <div>
                <h3 className="text-[#003D7A] mb-2">{benefit.title}</h3>
                <p className="text-sm text-gray-600">{benefit.description}</p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}