import { FileText, ArrowLeft } from "lucide-react";
import { Button } from "../components/ui/button";
import { Separator } from "../components/ui/separator";

export function TermsPage() {
  return (
    <div className="min-h-screen bg-white">
      {/* Hero */}
      <section className="relative bg-gradient-to-br from-[#003D7A] to-[#001f3f] pt-32 pb-16">
        <div className="container mx-auto px-4">
          <Button
            variant="ghost"
            className="text-white hover:bg-white/10 mb-6"
            onClick={() => window.history.back()}
          >
            <ArrowLeft className="mr-2 w-4 h-4" />
            Înapoi
          </Button>
          <div className="max-w-4xl mx-auto text-center text-white">
            <div className="inline-flex items-center justify-center w-16 h-16 bg-white/10 rounded-full mb-6">
              <FileText className="w-8 h-8" />
            </div>
            <h1 className="mb-4 text-3xl md:text-4xl">
              Termeni și Condiții
            </h1>
            <p className="text-gray-200">
              Ultima actualizare: 15 Noiembrie 2025
            </p>
          </div>
        </div>
      </section>

      {/* Content */}
      <section className="py-16">
        <div className="container mx-auto px-4">
          <div className="max-w-4xl mx-auto prose prose-lg">
            <h2 className="text-[#003D7A] text-2xl mb-4">1. Introducere</h2>
            <p className="text-gray-700 mb-6">
              Bun venit pe site-ul Global Credit Solutions! Prin accesarea și
              utilizarea acestui website, sunteți de acord să respectați și să
              fiți obligat de următorii termeni și condiții de utilizare.
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              2. Definirea Termenilor
            </h2>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>
                <strong>"Compania", "Noi", "Nostru"</strong> se referă la Global
                Credit Solutions, broker de credite autorizat.
              </li>
              <li>
                <strong>"Client", "Dumneavoastră"</strong> se referă la persoana
                fizică sau juridică care accesează serviciile noastre.
              </li>
              <li>
                <strong>"Servicii"</strong> se referă la serviciile de brokeraj
                financiar oferite de Companie.
              </li>
              <li>
                <strong>"Website"</strong> se referă la site-ul www.globalcredit.ro
                și toate subdomeniile acestuia.
              </li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              3. Serviciile Oferite
            </h2>
            <p className="text-gray-700 mb-4">
              Global Credit Solutions oferă servicii de intermediere în creditare,
              constând în:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>Consultanță gratuită pentru obținerea de credite</li>
              <li>Compararea ofertelor de la multiple instituții financiare</li>
              <li>Asistență în pregătirea documentației necesare</li>
              <li>Negocierea condițiilor cu instituțiile financiare</li>
              <li>Suport în procesul de aprobare și finalizare a creditului</li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              4. Obligațiile Clientului
            </h2>
            <p className="text-gray-700 mb-4">
              Prin utilizarea serviciilor noastre, clientul se angajează să:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>
                Furnizeze informații complete, corecte și actualizate despre
                situația sa financiară
              </li>
              <li>
                Prezinte documente autentice și valabile la solicitarea Companiei
              </li>
              <li>
                Respecte termenii și condițiile impuse de instituția financiară
                creditoare
              </li>
              <li>
                Notifice Compania în cazul modificării situației financiare pe
                parcursul procesului de aplicare
              </li>
              <li>
                Utilizeze serviciile în mod responsabil și legal
              </li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">5. Comisioane și Taxe</h2>
            <p className="text-gray-700 mb-6">
              Consultanța oferită de Global Credit Solutions este 100% gratuită
              pentru clienți. Compania este remunerată de instituțiile financiare
              partenere, doar în cazul aprobării și debursării creditului. Nu
              percepem niciun comision din partea clienților pentru serviciile de
              consultanță și intermediere.
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              6. Limitarea Responsabilității
            </h2>
            <p className="text-gray-700 mb-4">
              Global Credit Solutions acționează ca intermediar între client și
              instituțiile financiare. În acest context:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>
                Nu garantăm aprobarea creditului, decizia finală aparținând
                instituției financiare creditoare
              </li>
              <li>
                Nu suntem responsabili pentru modificarea condițiilor oferite de
                bănci
              </li>
              <li>
                Nu răspundem pentru nerespectarea obligațiilor contractuale dintre
                client și instituția financiară
              </li>
              <li>
                Recomandările noastre sunt bazate pe informațiile furnizate de
                client și nu constituie consultanță juridică sau fiscală
              </li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              7. Confidențialitatea Datelor
            </h2>
            <p className="text-gray-700 mb-6">
              Protejarea datelor cu caracter personal este o prioritate pentru noi.
              Toate informațiile personale și financiare sunt tratate conform
              Regulamentului (UE) 2016/679 (GDPR) și legislației românești în
              vigoare. Pentru detalii complete, consultați{" "}
              <button
                onClick={() => window.location.hash = "privacy"}
                className="text-[#0066CC] hover:underline"
              >
                Politica de Confidențialitate
              </button>
              .
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              8. Proprietate Intelectuală
            </h2>
            <p className="text-gray-700 mb-6">
              Întregul conținut al acestui website, incluzând dar fără a se limita
              la texte, grafice, logo-uri, imagini, videoclipuri și software, este
              proprietatea Global Credit Solutions sau a partenerilor săi și este
              protejat de legile privind drepturile de autor și proprietatea
              intelectuală. Este interzisă reproducerea, distribuirea sau
              modificarea conținutului fără acordul scris prealabil al Companiei.
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              9. Modificări ale Termenilor
            </h2>
            <p className="text-gray-700 mb-6">
              Ne rezervăm dreptul de a modifica acești termeni și condiții în
              orice moment. Modificările vor fi publicate pe această pagină și vor
              intra în vigoare imediat după publicare. Vă recomandăm să
              verificați periodic această pagină pentru a fi la curent cu
              eventualele actualizări.
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              10. Rezilierea Serviciilor
            </h2>
            <p className="text-gray-700 mb-6">
              Ne rezervăm dreptul de a refuza sau întrerupe furnizarea
              serviciilor noastre în cazul în care constatăm:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>Furnizarea de informații false sau incomplete</li>
              <li>Încercări de fraudă sau alte activități ilegale</li>
              <li>
                Comportament abuziv sau necorespunzător față de personalul Companiei
              </li>
              <li>Nerespectarea repetată a termenilor și condițiilor</li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">11. Legea Aplicabilă</h2>
            <p className="text-gray-700 mb-6">
              Acești termeni și condiții sunt guvernați de legislația română.
              Orice dispute vor fi soluționate pe cale amiabilă sau, în caz
              contrar, vor fi supuse instanțelor competente din România.
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">12. Contact</h2>
            <p className="text-gray-700 mb-4">
              Pentru întrebări sau clarificări referitoare la acești termeni și
              condiții, ne puteți contacta la:
            </p>
            <div className="bg-[#F5F7FA] p-6 rounded-xl">
              <p className="text-gray-700">
                <strong>Global Credit Solutions</strong>
                <br />
                Bd. Unirii 1, București, România
                <br />
                Telefon: +40 21 234 5678
                <br />
                Email: contact@globalcredit.ro
                <br />
                Program: Luni - Vineri, 09:00 - 18:00
              </p>
            </div>

            <Separator className="my-8" />

            <div className="bg-gradient-to-br from-[#003D7A] to-[#0066CC] p-8 rounded-xl text-center text-white mt-12">
              <h3 className="text-white mb-3 text-xl">Ai întrebări?</h3>
              <p className="text-gray-200 mb-6">
                Echipa noastră este aici să îți răspundă la orice nelămurire.
              </p>
              <Button
                size="lg"
                className="bg-white text-[#003D7A] hover:bg-gray-100"
                onClick={() => window.location.hash = "contact"}
              >
                Contactează-ne
              </Button>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
