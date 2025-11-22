import { Users, Target, Award, TrendingUp, Shield, Heart } from "lucide-react";
import { Button } from "../components/ui/button";

export function AboutPage() {
  const stats = [
    { value: "65,000+", label: "Clienți mulțumiți" },
    { value: "30+", label: "Parteneri bancari" },
    { value: "15+", label: "Ani de experiență" },
    { value: "98%", label: "Rată de aprobare" },
  ];

  const values = [
    {
      icon: Shield,
      title: "Transparență",
      description: "Oferim informații clare și complete despre toate ofertele de creditare.",
    },
    {
      icon: Heart,
      title: "Integritate",
      description: "Acționăm întotdeauna în interesul clienților noștri, nu al băncilor.",
    },
    {
      icon: Award,
      title: "Profesionalism",
      description: "Echipa noastră are certificări și experiență în domeniul financiar-bancar.",
    },
    {
      icon: TrendingUp,
      title: "Inovație",
      description: "Folosim tehnologie modernă pentru a simplifica procesul de creditare.",
    },
  ];

  const team = [
    {
      name: "Ana Popescu",
      role: "CEO & Fondator",
      description: "15 ani de experiență în sectorul bancar și consultanță financiară.",
    },
    {
      name: "Mihai Ionescu",
      role: "Director Operations",
      description: "Expert în procesarea și optimizarea aplicațiilor de credit.",
    },
    {
      name: "Elena Dumitrescu",
      role: "Director Comercial",
      description: "Specialist în relații cu clienții și parteneriate strategice.",
    },
    {
      name: "Andrei Gheorghe",
      role: "Chief Credit Officer",
      description: "Analist financiar cu certificări internaționale în risk management.",
    },
  ];

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-[#003D7A] to-[#001f3f] pt-32 pb-16 md:pt-40 md:pb-24">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl mx-auto text-center text-white">
            <h1 className="mb-6 text-3xl md:text-4xl lg:text-5xl">
              Despre Global Credit Solutions
            </h1>
            <p className="text-xl text-gray-200 mb-8">
              Suntem mai mult decât un broker de credite. Suntem partenerii tăi
              de încredere în realizarea proiectelor tale financiare.
            </p>
          </div>
        </div>
      </section>

      {/* Stats Section */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
            {stats.map((stat, index) => (
              <div key={index} className="text-center">
                <div className="text-3xl md:text-4xl text-[#003D7A] mb-2">
                  {stat.value}
                </div>
                <div className="text-gray-600">{stat.label}</div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Story Section */}
      <section className="py-16 bg-[#F5F7FA]">
        <div className="container mx-auto px-4">
          <div className="max-w-4xl mx-auto">
            <div className="text-center mb-12">
              <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">
                Povestea Noastră
              </h2>
            </div>
            <div className="prose prose-lg max-w-none">
              <p className="text-gray-700 mb-6">
                Global Credit Solutions a fost fondată în 2010 cu o misiune simplă
                dar ambițioasă: să democratizăm accesul la credite și să facem
                procesul de creditare transparent, rapid și eficient pentru toți
                românii.
              </p>
              <p className="text-gray-700 mb-6">
                În cei peste 15 ani de activitate, am ajutat peste 65,000 de
                persoane și companii să își realizeze visurile - de la achiziția
                primei locuințe, la extinderea afacerilor, până la consolidarea
                datoriilor pentru o viață financiară mai liniștită.
              </p>
              <p className="text-gray-700 mb-6">
                Astăzi, colaborăm cu peste 30 de instituții financiare din România
                și avem una dintre cele mai ridicate rate de aprobare din industrie.
                Secretul nostru? Expertise, dedicare și o abordare centrată pe
                client.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Mission & Vision */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
            <div className="text-center md:text-left">
              <div className="inline-flex items-center justify-center w-16 h-16 bg-[#0066CC]/10 rounded-full mb-6">
                <Target className="w-8 h-8 text-[#0066CC]" />
              </div>
              <h3 className="text-[#003D7A] mb-4 text-xl md:text-2xl">
                Misiunea Noastră
              </h3>
              <p className="text-gray-700">
                Să oferim fiecărui client acces la cele mai bune soluții de
                creditare de pe piață, prin consultanță personalizată, transparență
                totală și un serviciu de excelență care depășește așteptările.
              </p>
            </div>
            <div className="text-center md:text-left">
              <div className="inline-flex items-center justify-center w-16 h-16 bg-[#0066CC]/10 rounded-full mb-6">
                <TrendingUp className="w-8 h-8 text-[#0066CC]" />
              </div>
              <h3 className="text-[#003D7A] mb-4 text-xl md:text-2xl">
                Viziunea Noastră
              </h3>
              <p className="text-gray-700">
                Să devenim liderul pieței de brokeraj financiar din România,
                recunoscut pentru integritate, inovație și impactul pozitiv asupra
                vieții clienților noștri și a comunității.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Values Section */}
      <section className="py-16 bg-[#F5F7FA]">
        <div className="container mx-auto px-4">
          <div className="text-center mb-12">
            <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">
              Valorile Noastre
            </h2>
            <p className="text-gray-600 max-w-2xl mx-auto">
              Principiile care ne ghidează fiecare decizie și interacțiune cu
              clienții noștri.
            </p>
          </div>
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {values.map((value, index) => (
              <div
                key={index}
                className="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow"
              >
                <div className="inline-flex items-center justify-center w-12 h-12 bg-[#0066CC]/10 rounded-lg mb-4">
                  <value.icon className="w-6 h-6 text-[#0066CC]" />
                </div>
                <h3 className="text-[#003D7A] mb-2">{value.title}</h3>
                <p className="text-gray-600 text-sm">{value.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Team Section */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="text-center mb-12">
            <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">
              Echipa Noastră
            </h2>
            <p className="text-gray-600 max-w-2xl mx-auto">
              Profesioniști cu experiență vastă în domeniul financiar-bancar,
              dedicați succesului tău.
            </p>
          </div>
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {team.map((member, index) => (
              <div
                key={index}
                className="text-center bg-[#F5F7FA] p-6 rounded-xl"
              >
                <div className="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-[#003D7A] to-[#0066CC] rounded-full mb-4">
                  <Users className="w-12 h-12 text-white" />
                </div>
                <h3 className="text-[#003D7A] mb-1">{member.name}</h3>
                <div className="text-[#0066CC] text-sm mb-3">{member.role}</div>
                <p className="text-gray-600 text-sm">{member.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-16 bg-gradient-to-br from-[#003D7A] to-[#0066CC]">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl mx-auto text-center text-white">
            <h2 className="mb-4 text-2xl md:text-3xl">
              Hai să lucrăm împreună!
            </h2>
            <p className="text-xl text-gray-200 mb-8">
              Fie că ai nevoie de un credit sau vrei să te alături echipei noastre,
              suntem aici pentru tine.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Button
                size="lg"
                className="bg-white text-[#003D7A] hover:bg-gray-100"
                onClick={() => window.location.hash = "contact"}
              >
                Contactează-ne
              </Button>
              <Button
                size="lg"
                variant="outline"
                className="border-2 border-white text-white bg-transparent hover:bg-white hover:text-[#003D7A]"
                onClick={() => window.location.hash = "services"}
              >
                Vezi Serviciile
              </Button>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
