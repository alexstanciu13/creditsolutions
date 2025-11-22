import { useState, useEffect } from "react";
import { Star, ChevronLeft, ChevronRight, Quote } from "lucide-react";
import { Button } from "./ui/button";

export function Testimonials() {
  const [currentIndex, setCurrentIndex] = useState(0);
  const [isAutoPlaying, setIsAutoPlaying] = useState(true);

  const testimonials = [
    {
      name: "Mihai T.",
      location: "București",
      rating: 5,
      quote:
        "Am economisit 15.000 lei prin refinanțare! Echipa Global Credit Solutions a fost excepțională. M-au ghidat pas cu pas și au negociat o dobândă mult mai bună decât aveam anterior.",
      result: "Economie de 15.000 RON",
      avatar: "M",
    },
    {
      name: "Elena P.",
      location: "Cluj-Napoca",
      rating: 5,
      quote:
        "Procesul a fost surprinzător de rapid și simplu. În doar 3 zile am primit aprobarea pentru creditul ipotecar. Consultanții au fost mereu disponibili să răspundă la întrebările mele.",
      result: "Aprobare în 3 zile",
      avatar: "E",
    },
    {
      name: "Andrei M.",
      location: "Timișoara",
      rating: 5,
      quote:
        "Nu credeam că pot obține un credit atât de avantajos pentru afacerea mea. Brokerii au găsit oferta perfectă pentru nevoile companiei. Recomand cu încredere!",
      result: "Credit business aprobat",
      avatar: "A",
    },
    {
      name: "Carmen V.",
      location: "Iași",
      rating: 5,
      quote:
        "Serviciu profesionist și transparent. Am apreciat foarte mult că nu am plătit nimic pentru consultanță și că am avut acces la oferte de la toate băncile din piață.",
      result: "Credit auto aprobat",
      avatar: "C",
    },
  ];

  useEffect(() => {
    if (!isAutoPlaying) return;

    const interval = setInterval(() => {
      setCurrentIndex((prev) => (prev + 1) % testimonials.length);
    }, 5000);

    return () => clearInterval(interval);
  }, [isAutoPlaying, testimonials.length]);

  const handlePrevious = () => {
    setIsAutoPlaying(false);
    setCurrentIndex(
      (prev) => (prev - 1 + testimonials.length) % testimonials.length
    );
  };

  const handleNext = () => {
    setIsAutoPlaying(false);
    setCurrentIndex((prev) => (prev + 1) % testimonials.length);
  };

  return (
    <section className="py-16 bg-[#F5F7FA]">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">Ce Spun Clienții Noștri</h2>
          <p className="text-gray-600 max-w-2xl mx-auto">
            Peste 65.000 de clienți mulțumiți care au obținut credite prin
            serviciile noastre.
          </p>
        </div>

        <div className="max-w-4xl mx-auto">
          <div
            className="relative"
            onMouseEnter={() => setIsAutoPlaying(false)}
            onMouseLeave={() => setIsAutoPlaying(true)}
          >
            {/* Main Testimonial Card */}
            <div className="bg-white rounded-2xl shadow-xl p-8 md:p-12 relative overflow-hidden">
              {/* Quote Icon */}
              <div className="absolute top-6 right-6 opacity-10">
                <Quote className="w-24 h-24 text-[#0066CC]" />
              </div>

              <div className="relative">
                {/* Rating */}
                <div className="flex gap-1 mb-6">
                  {[...Array(testimonials[currentIndex].rating)].map((_, i) => (
                    <Star
                      key={i}
                      className="w-5 h-5 fill-[#FFB800] text-[#FFB800]"
                    />
                  ))}
                </div>

                {/* Quote Text */}
                <blockquote className="text-gray-700 mb-6 text-lg">
                  "{testimonials[currentIndex].quote}"
                </blockquote>

                {/* Result Badge */}
                <div className="inline-block bg-[#0066CC]/10 text-[#0066CC] px-4 py-2 rounded-full text-sm mb-6">
                  ✓ {testimonials[currentIndex].result}
                </div>

                {/* Author Info */}
                <div className="flex items-center gap-4">
                  <div className="w-14 h-14 bg-[#0066CC] rounded-full flex items-center justify-center text-white">
                    {testimonials[currentIndex].avatar}
                  </div>
                  <div>
                    <div className="text-[#003D7A]">
                      {testimonials[currentIndex].name}
                    </div>
                    <div className="text-sm text-gray-500">
                      {testimonials[currentIndex].location}
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {/* Navigation Buttons */}
            <div className="flex justify-center gap-4 mt-8">
              <Button
                onClick={handlePrevious}
                variant="outline"
                size="icon"
                className="rounded-full w-12 h-12 border-2 hover:bg-[#0066CC] hover:text-white hover:border-[#0066CC] transition-all"
              >
                <ChevronLeft className="w-5 h-5" />
              </Button>

              {/* Dot Indicators */}
              <div className="flex items-center gap-2">
                {testimonials.map((_, index) => (
                  <button
                    key={index}
                    onClick={() => {
                      setCurrentIndex(index);
                      setIsAutoPlaying(false);
                    }}
                    className={`transition-all rounded-full ${
                      index === currentIndex
                        ? "w-8 h-3 bg-[#0066CC]"
                        : "w-3 h-3 bg-gray-300 hover:bg-gray-400"
                    }`}
                    aria-label={`Go to testimonial ${index + 1}`}
                  />
                ))}
              </div>

              <Button
                onClick={handleNext}
                variant="outline"
                size="icon"
                className="rounded-full w-12 h-12 border-2 hover:bg-[#0066CC] hover:text-white hover:border-[#0066CC] transition-all"
              >
                <ChevronRight className="w-5 h-5" />
              </Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}