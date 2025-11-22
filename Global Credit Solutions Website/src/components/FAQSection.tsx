import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "./ui/accordion";

export function FAQSection() {
  const faqs = [
    {
      question: "Ce documente sunt necesare pentru un credit?",
      answer:
        "Documentele necesare variază în funcție de tipul de credit, dar în general sunt necesare: CI/BI, acte de venit (adeverință de salariu, bilanț contabil pentru firme), extrase de cont. Avem soluții pentru orice problemă și te ghidăm pas cu pas în întregul proces.",
    },
    {
      question: "Cum se calculează DAE (Dobânda Anuală Efectivă)?",
      answer:
        "DAE include rata dobânzii plus toate costurile asociate creditului: comisioane de acordare, de administrare, asigurări obligatorii etc. Este indicatorul real al costului total al creditului și permite compararea corectă între oferte. Cu cât DAE-ul este mai mic, cu atât creditul este mai avantajos.",
    },
    {
      question: "Cât timp durează procesul de obținere a creditului?",
      answer:
        "Procesul de obținere a creditului poate dura până la 10-15 zile lucrătoare, în funcție de tipul de credit și complexitatea dosarului. Oferim soluții personalizate și te asistăm pe tot parcursul procesului pentru a accelera aprobarea.",
    },
    {
      question: "Pot obține credit cu istoric negativ?",
      answer:
        "Da, avem soluții pentru orice problemă! Lucrăm cu instituții care analizează fiecare caz individual și oferim servicii de consultanță pentru ștergerea istoricului negativ. Șansele depind de situația ta financiară actuală, dar suntem aici să te ajutăm.",
    },
    {
      question: "Este sigur să trimit documente online?",
      answer:
        "Da, absolut sigur! Platforma noastră folosește criptare SSL și respectă toate standardele GDPR de protecție a datelor. Documentele tale sunt stocate în siguranță și accesate doar de consultanții autorizați care lucrează la dosarul tău. Nu partajăm niciodată informațiile tale cu terțe părți fără acordul tău.",
    },
  ];

  return (
    <section id="faq" className="py-16 bg-[#F5F7FA]">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">Întrebări Frecvente</h2>
          <p className="text-gray-600 max-w-2xl mx-auto">
            Răspunsuri clare la cele mai comune întrebări despre serviciile
            noastre și procesul de creditare.
          </p>
        </div>

        <div className="max-w-3xl mx-auto">
          <Accordion type="single" collapsible className="space-y-4">
            {faqs.map((faq, index) => (
              <AccordionItem
                key={index}
                value={`item-${index}`}
                className="bg-white rounded-lg border border-gray-200 px-6"
              >
                <AccordionTrigger className="text-left text-[#003D7A] hover:text-[#0066CC] transition-colors">
                  {faq.question}
                </AccordionTrigger>
                <AccordionContent className="text-gray-600">
                  {faq.answer}
                </AccordionContent>
              </AccordionItem>
            ))}
          </Accordion>

          <div className="mt-8 text-center">
            <p className="text-gray-600 mb-4">Nu ai găsit răspunsul căutat?</p>
            <button
              onClick={() => (window.location.hash = "contact")}
              className="text-[#0066CC] hover:underline inline-flex items-center gap-2"
            >
              Contactează-ne pentru mai multe informații
              <svg
                className="w-4 h-4"
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
        </div>
      </div>
    </section>
  );
}