import {
  Home,
  User,
  Car,
  FileText,
  Building,
  RefreshCw,
  CreditCard,
  Briefcase,
  Check,
  ArrowRight,
} from "lucide-react";
import { Button } from "../components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "../components/ui/card";

export function ServicesPage() {
  const services = [
    {
      icon: Home,
      title: "Credit Ipotecar",
      description: "Pentru achiziția sau construcția locuinței tale de vis",
      features: [
        "Rate de dobândă competitive de la 4.99%",
        "Finanțare până la 95% din valoarea proprietății",
        "Perioadă de creditare: 5-30 ani",
        "Fără avans pentru Prima Casă",
        "Evaluare gratuită a proprietății",
        "Consultanță pentru toate programele guvernamentale",
      ],
      details:
        "Îți găsim cel mai bun credit pentru achiziția unei locuințe noi sau refinanțarea unei locuințe existente. Colaborăm cu toate băncile din România pentru a-ți oferi cele mai competitive oferte.",
    },
    {
      icon: User,
      title: "Credit Nevoi Personale",
      description: "Soluții flexibile pentru orice nevoie financiară",
      features: [
        "Sume de la 5,000 la 100,000 RON",
        "Aprobare rapidă în 24-48 ore",
        "Fără justificare a utilizării sumei",
        "Rate fixe sau variabile",
        "Posibilitate refinanțare",
        "Dobânzi de la 7.99% pe an",
      ],
      details:
        "Fie că ai nevoie de bani pentru o vacanță, renovări, educație sau consolidare datorii, îți găsim cea mai bună ofertă de credit personal adaptată nevoilor tale.",
    },
    {
      icon: Car,
      title: "Credit Auto & Leasing",
      description: "Finanțare pentru mașina potrivită pentru tine",
      features: [
        "Avans de la 0%",
        "Perioadă: 12-96 luni",
        "Rate fixe și predictibile",
        "Aprobare în maxim 2 ore",
        "Valabil pentru mașini noi și second-hand",
        "Asigurare inclusă în pachet",
      ],
      details:
        "Te ajutăm să alegi între credit auto clasic sau leasing operațional/financiar, în funcție de nevoile tale. Comparăm ofertele tuturor dealerilor și băncilor.",
    },
    {
      icon: FileText,
      title: "Credit cu Garanție Imobiliară",
      description: "Sume mari garantate cu proprietatea ta",
      features: [
        "Sume de până la 500,000 EUR",
        "Rate de dobândă foarte competitive",
        "Perioadă extinsă de rambursare",
        "Fără justificare destinație fonduri",
        "Evaluare proprietate gratuită",
        "Flexibilitate în rambursare",
      ],
      details:
        "Ideal pentru investiții mari, afaceri, sau consolidarea datoriilor. Folosește valoarea proprietății tale pentru a accesa sume mari de bani la dobânzi avantajoase.",
    },
    {
      icon: Building,
      title: "Credite Persoane Juridice",
      description: "Soluții de finanțare pentru afacerea ta",
      features: [
        "Credite de investiție și capital de lucru",
        "Linii de credit revolving",
        "Leasing echipamente și utilaje",
        "Carduri de credit corporate",
        "Finanțare proiecte UE",
        "Consultanță financiară gratuită",
      ],
      details:
        "Susținem dezvoltarea afacerii tale cu soluții complete de finanțare. De la start-up-uri la companii mature, avem experiența necesară pentru fiecare etapă.",
    },
    {
      icon: RefreshCw,
      title: "Refinanțare Credite",
      description: "Reduce ratele și economisește bani",
      features: [
        "Reducere dobândă cu până la 3%",
        "Extinderea perioadei de creditare",
        "Consolidarea mai multor credite",
        "Fără penalizări de rambursare anticipată",
        "Cash extra până la 50,000 RON",
        "Consultanță gratuită refinanțare",
      ],
      details:
        "Dacă ai deja un credit, te ajutăm să-l refinanțezi la condiții mai bune. Analizăm situația ta financiară și îți găsim cele mai avantajoase oferte de pe piață.",
    },
    {
      icon: CreditCard,
      title: "Carduri de Credit",
      description: "Flexibilitate financiară la îndemână",
      features: [
        "Limite de credit de la 2,000 RON",
        "Perioada de grație până la 60 zile",
        "Fără dobândă în perioada de grație",
        "Recompense și cashback",
        "Carduri contactless",
        "Acces la sălile VIP aeroporturi",
      ],
      details:
        "Compară toate ofertele de carduri de credit din piață și alege cel mai potrivit pentru stilul tău de viață. Beneficiezi de consultanță gratuită pentru alegerea cardului ideal.",
    },
    {
      icon: Briefcase,
      title: "Asigurări Credite",
      description: "Protecție completă pentru împrumuturile tale",
      features: [
        "Asigurare viață debitori",
        "Protecție în caz de șomaj",
        "Asigurare invaliditate",
        "Asigurare locuință/auto",
        "Prime competitive",
        "Gestionare claims rapidă",
      ],
      details:
        "Protejează-te pe tine și familia ta cu asigurări adaptate creditului tău. Te ajutăm să alegi pachetul de asigurări potrivit la cele mai bune prețuri.",
    },
  ];

  const process = [
    {
      step: "1",
      title: "Consultație Inițială",
      description: "Discutăm despre nevoile și obiectivele tale financiare",
    },
    {
      step: "2",
      title: "Analiză Oferte",
      description: "Comparăm ofertele de la toți partenerii noștri",
    },
    {
      step: "3",
      title: "Aplicare",
      description: "Te ajutăm să completezi dosarul și aplicația",
    },
    {
      step: "4",
      title: "Aprobare",
      description: "Negociem cele mai bune condiții pentru tine",
    },
    {
      step: "5",
      title: "Finalizare",
      description: "Te însoțim până la semnarea contractului",
    },
  ];

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-[#003D7A] to-[#001f3f] pt-32 pb-16 md:pt-40 md:pb-24">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl mx-auto text-center text-white">
            <h1 className="mb-6 text-3xl md:text-4xl lg:text-5xl">
              Serviciile Noastre de Brokeraj
            </h1>
            <p className="text-xl text-gray-200 mb-8">
              Soluții complete de creditare pentru persoane fizice și juridice.
              Consultanță 100% gratuită și transparentă.
            </p>
          </div>
        </div>
      </section>

      {/* Services Grid */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            {services.map((service, index) => (
              <Card
                key={index}
                className="hover:shadow-lg transition-shadow border-2 border-gray-100"
              >
                <CardHeader>
                  <div className="inline-flex items-center justify-center w-14 h-14 bg-[#0066CC]/10 rounded-lg mb-4">
                    <service.icon className="w-7 h-7 text-[#0066CC]" />
                  </div>
                  <CardTitle className="text-[#003D7A]">
                    {service.title}
                  </CardTitle>
                  <CardDescription className="text-base">
                    {service.description}
                  </CardDescription>
                </CardHeader>
                <CardContent>
                  <p className="text-gray-700 mb-4">{service.details}</p>
                  <div className="space-y-2 mb-6">
                    {service.features.map((feature, idx) => (
                      <div key={idx} className="flex items-start gap-2">
                        <Check className="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" />
                        <span className="text-sm text-gray-600">{feature}</span>
                      </div>
                    ))}
                  </div>
                  <Button
                    className="w-full bg-[#0066CC] hover:bg-[#0052A3] text-white"
                    onClick={() => window.location.hash = "contact"}
                  >
                    Solicită Ofertă
                    <ArrowRight className="ml-2 w-4 h-4" />
                  </Button>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>
      </section>

      {/* Process Section */}
      <section className="py-16 bg-[#F5F7FA]">
        <div className="container mx-auto px-4">
          <div className="text-center mb-12">
            <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">
              Cum Funcționează Procesul
            </h2>
            <p className="text-gray-600 max-w-2xl mx-auto">
              Un proces simplu, transparent și eficient. De la consultație la
              finalizare, suntem alături de tine.
            </p>
          </div>
          <div className="max-w-4xl mx-auto">
            <div className="relative">
              {/* Progress Line */}
              <div className="hidden md:block absolute top-8 left-0 right-0 h-1 bg-[#0066CC]/20">
                <div className="absolute inset-0 bg-[#0066CC]" />
              </div>
              
              <div className="grid md:grid-cols-5 gap-8 relative">
                {process.map((item, index) => (
                  <div key={index} className="text-center">
                    <div className="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#003D7A] to-[#0066CC] text-white rounded-full mb-4 relative z-10 shadow-lg">
                      <span className="text-xl">{item.step}</span>
                    </div>
                    <h3 className="text-[#003D7A] mb-2">{item.title}</h3>
                    <p className="text-sm text-gray-600">{item.description}</p>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Why Choose Us */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl mx-auto text-center">
            <h2 className="text-[#003D7A] mb-6 text-2xl md:text-3xl">
              De Ce Să Ne Alegi?
            </h2>
            <div className="grid md:grid-cols-3 gap-8 mb-8">
              <div>
                <div className="text-3xl text-[#0066CC] mb-2">100%</div>
                <div className="text-gray-600">Consultanță Gratuită</div>
              </div>
              <div>
                <div className="text-3xl text-[#0066CC] mb-2">30+</div>
                <div className="text-gray-600">Parteneri Financiari</div>
              </div>
              <div>
                <div className="text-3xl text-[#0066CC] mb-2">24-48h</div>
                <div className="text-gray-600">Răspuns Rapid</div>
              </div>
            </div>
            <p className="text-gray-700 mb-8">
              Expertiza noastră și relațiile excelente cu instituțiile financiare
              ne permit să îți oferim cele mai bune condiții de pe piață, rapid și
              fără complicații.
            </p>
            <Button
              size="lg"
              className="bg-[#0066CC] hover:bg-[#0052A3] text-white"
              onClick={() => window.location.hash = "contact"}
            >
              Începe Acum
              <ArrowRight className="ml-2 w-4 h-4" />
            </Button>
          </div>
        </div>
      </section>
    </div>
  );
}
