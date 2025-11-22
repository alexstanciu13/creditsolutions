import { Users, Building2, Star, Award } from "lucide-react";

export function TrustSignals() {
  const stats = [
    {
      icon: Users,
      number: "65.000+",
      label: "Credite intermediate cu succes",
    },
    {
      icon: Building2,
      number: "30+",
      label: "Parteneri bancari",
    },
    {
      icon: Star,
      number: "4.9/5",
      label: "Recenzii clienți",
    },
    {
      icon: Award,
      number: "12+",
      label: "Ani experiență în creditare",
    },
  ];

  return (
    <section className="py-16 bg-white">
      <div className="container mx-auto px-4">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {stats.map((stat, index) => (
            <div
              key={index}
              className="text-center p-6 rounded-xl bg-[#F5F7FA] hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
            >
              <div className="inline-flex items-center justify-center w-16 h-16 bg-[#0066CC] rounded-full mb-4">
                <stat.icon className="w-8 h-8 text-white" />
              </div>
              <div className="text-[#003D7A] mb-2">{stat.number}</div>
              <p className="text-gray-600">{stat.label}</p>
            </div>
          ))}
        </div>

        {/* Client Reviews */}
        <div className="mt-12 max-w-4xl mx-auto">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
            {[
              {
                name: "Maria P.",
                text: "Serviciu excelent! Am obținut creditul mult mai repede decât așteptam.",
              },
              {
                name: "Ion D.",
                text: "Consultanți profesioniști și răbdători. Recomand cu încredere!",
              },
              {
                name: "Elena M.",
                text: "Dobânda obținută prin broker a fost mai bună decât oferta băncii.",
              },
            ].map((review, index) => (
              <div
                key={index}
                className="bg-white p-4 rounded-lg border border-gray-200"
              >
                <div className="flex gap-1 mb-2">
                  {[...Array(5)].map((_, i) => (
                    <Star
                      key={i}
                      className="w-4 h-4 fill-[#FFB800] text-[#FFB800]"
                    />
                  ))}
                </div>
                <p className="text-sm text-gray-600 mb-2">{review.text}</p>
                <p className="text-xs text-gray-500">— {review.name}</p>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
}