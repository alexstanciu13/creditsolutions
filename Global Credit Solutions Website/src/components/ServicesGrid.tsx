import { Home, User, Car, FileText, Briefcase, RefreshCw, Settings } from "lucide-react";

export function ServicesGrid() {
  const services = [
    {
      icon: User,
      title: "Credite de Nevoi Personale",
      description:
        "Credite rapide pentru orice proiect personal. Soluții personalizate adaptate nevoilor tale financiare.",
    },
    {
      icon: Home,
      title: "Credit Ipotecar/Prima Casă",
      description:
        "Finanțare pentru achiziția casei tale. Rate flexibile și dobânzi competitive de la bănci de top.",
    },
    {
      icon: Car,
      title: "Credite Auto/Leasing",
      description:
        "Finanțare pentru mașina visurilor tale. Soluții de credit auto și leasing cu condiții avantajoase.",
    },
    {
      icon: Briefcase,
      title: "Credite/Linii de Credit pentru Persoane Juridice",
      description:
        "Credite pentru afaceri și IMM-uri. Capital de lucru, investiții sau extindere pentru compania ta.",
    },
    {
      icon: RefreshCw,
      title: "Refinanțări de Credit",
      description:
        "Refinanțează creditele existente și economisește bani. Dobândă mai mică, rată redusă.",
    },
    {
      icon: Settings,
      title: "Alte Servicii",
      description:
        "Ștergere istoric negativ, consultanță financiară și alte soluții personalizate pentru nevoile tale.",
    },
  ];

  return (
    <section id="services" className="py-16 bg-[#F5F7FA]">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">Serviciile Noastre</h2>
          <p className="text-gray-600 max-w-2xl mx-auto">
            Oferim soluții complete pentru toate tipurile de credite. Indiferent de
            nevoile tale, te ajutăm să găsești cea mai bună opțiune.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {services.map((service, index) => (
            <div
              key={index}
              className="bg-white rounded-xl p-6 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group cursor-pointer"
            >
              <div className="inline-flex items-center justify-center w-14 h-14 bg-[#0066CC]/10 rounded-lg mb-4 group-hover:bg-[#0066CC] transition-colors">
                <service.icon className="w-7 h-7 text-[#0066CC] group-hover:text-white transition-colors" />
              </div>
              <h3 className="text-[#003D7A] mb-3">{service.title}</h3>
              <p className="text-gray-600 mb-4">{service.description}</p>
              <button className="text-[#0066CC] hover:underline inline-flex items-center gap-1 transition-all">
                Vezi mai mult
                <svg
                  className="w-4 h-4 group-hover:translate-x-1 transition-transform"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth={2}
                    d="M9 5l7 7-7 7"
                  />
                </svg>
              </button>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}