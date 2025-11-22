import { Shield, ArrowLeft } from "lucide-react";
import { Button } from "../components/ui/button";
import { Separator } from "../components/ui/separator";

export function PrivacyPage() {
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
              <Shield className="w-8 h-8" />
            </div>
            <h1 className="mb-4 text-3xl md:text-4xl">
              Politica de Confidențialitate
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
            <p className="text-gray-700 mb-6">
              La Global Credit Solutions, protecția datelor dumneavoastră personale
              este o prioritate. Această politică de confidențialitate explică ce
              informații colectăm, cum le utilizăm și ce drepturi aveți în legătură
              cu datele personale.
            </p>

            <h2 className="text-[#003D7A] text-2xl mb-4">
              1. Operatorul de Date cu Caracter Personal
            </h2>
            <div className="bg-[#F5F7FA] p-6 rounded-xl mb-6">
              <p className="text-gray-700">
                <strong>Global Credit Solutions SRL</strong>
                <br />
                CUI: RO12345678
                <br />
                J40/1234/2010
                <br />
                Bd. Unirii 1, București, România
                <br />
                Email: dpo@globalcredit.ro
                <br />
                Telefon: +40 21 234 5678
              </p>
            </div>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              2. Ce Date Colectăm
            </h2>
            <p className="text-gray-700 mb-4">
              În funcție de serviciile utilizate, putem colecta următoarele
              categorii de date personale:
            </p>

            <h3 className="text-[#003D7A] text-lg mb-3">
              2.1. Date de Identificare
            </h3>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>Nume și prenume</li>
              <li>Cod Numeric Personal (CNP)</li>
              <li>Serie și număr CI/pașaport</li>
              <li>Data și locul nașterii</li>
              <li>Cetățenie și rezidență</li>
            </ul>

            <h3 className="text-[#003D7A] text-lg mb-3">
              2.2. Date de Contact
            </h3>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>Adresă de email</li>
              <li>Număr de telefon</li>
              <li>Adresă de domiciliu/reședință</li>
            </ul>

            <h3 className="text-[#003D7A] text-lg mb-3">
              2.3. Date Financiare
            </h3>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>Venituri lunare și surse de venit</li>
              <li>Informații despre angajator</li>
              <li>Istoric de credit și raporturi Biroul de Credit</li>
              <li>Informații despre credite existente</li>
              <li>Date despre proprietăți și active</li>
            </ul>

            <h3 className="text-[#003D7A] text-lg mb-3">
              2.4. Date de Navigare (Website)
            </h3>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>Adresa IP</li>
              <li>Tip de browser și sistem de operare</li>
              <li>Pagini vizitate și durată de vizitare</li>
              <li>Cookie-uri (conform politicii de cookies)</li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              3. Scopurile Prelucrării Datelor
            </h2>
            <p className="text-gray-700 mb-4">
              Utilizăm datele dumneavoastră personale pentru:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>
                <strong>Furnizarea serviciilor de brokeraj:</strong> Pentru a vă
                putea oferi consultanță și a intermedia obținerea creditului
              </li>
              <li>
                <strong>Evaluarea eligibilității:</strong> Pentru a determina ce
                produse financiare vi se potrivesc
              </li>
              <li>
                <strong>Comunicare:</strong> Pentru a vă contacta cu privire la
                serviciile noastre și stadiul aplicațiilor
              </li>
              <li>
                <strong>Îndeplinirea obligațiilor legale:</strong> Pentru
                conformitatea cu legislația anti-spălare de bani (AML) și alte
                reglementări
              </li>
              <li>
                <strong>Marketing:</strong> Pentru a vă trimite oferte relevante
                (doar cu consimțământul dumneavoastră)
              </li>
              <li>
                <strong>Îmbunătățirea serviciilor:</strong> Pentru analiză și
                optimizarea experiențe utilizatorului
              </li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              4. Temeiul Legal al Prelucrării
            </h2>
            <p className="text-gray-700 mb-4">
              Prelucram datele dumneavoastră pe următoarele baze legale:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>
                <strong>Consimțământ:</strong> Pentru marketing și newsletter
              </li>
              <li>
                <strong>Executarea contractului:</strong> Pentru furnizarea
                serviciilor de brokeraj
              </li>
              <li>
                <strong>Obligații legale:</strong> Pentru conformitatea cu
                legislația financiară
              </li>
              <li>
                <strong>Interes legitim:</strong> Pentru îmbunătățirea serviciilor
                și prevenirea fraudei
              </li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              5. Cu Cine Partajăm Datele
            </h2>
            <p className="text-gray-700 mb-4">
              Datele dumneavoastră pot fi dezvăluite următoarelor categorii de
              destinatari:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>
                <strong>Instituții financiare partenere:</strong> Bănci și
                societăți de creditare pentru procesarea aplicațiilor
              </li>
              <li>
                <strong>Biroul de Credit:</strong> Pentru verificarea istoricului
                de credit
              </li>
              <li>
                <strong>Furnizori de servicii:</strong> Companii IT, hosting,
                marketing (cu acorduri de confidențialitate)
              </li>
              <li>
                <strong>Autorități:</strong> Când este cerut legal (ANAF, ANPC,
                instanțe judecătorești)
              </li>
            </ul>

            <p className="text-gray-700 mb-6">
              <strong>Important:</strong> Nu vindem și nu închiriem datele
              dumneavoastră personale către terți pentru scopuri de marketing.
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              6. Perioada de Stocare a Datelor
            </h2>
            <p className="text-gray-700 mb-6">
              Păstrăm datele dumneavoastră personale doar atâta timp cât este
              necesar pentru îndeplinirea scopurilor menționate sau conform
              obligațiilor legale:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>
                <strong>Date despre clienți activi:</strong> Pe durata contractului
                + 5 ani (conform legislației financiare)
              </li>
              <li>
                <strong>Aplicații respinse:</strong> 2 ani de la respingere
              </li>
              <li>
                <strong>Marketing (cu consimțământ):</strong> Până la retragerea
                consimțământului
              </li>
              <li>
                <strong>Obligații contabile:</strong> 10 ani (conform Codului Fiscal)
              </li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">7. Drepturile Tale</h2>
            <p className="text-gray-700 mb-4">
              Conform GDPR, beneficiați de următoarele drepturi:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>
                <strong>Dreptul de acces:</strong> Puteți solicita o copie a
                datelor personale pe care le deținem despre dumneavoastră
              </li>
              <li>
                <strong>Dreptul la rectificare:</strong> Puteți cere corectarea
                datelor inexacte sau incomplete
              </li>
              <li>
                <strong>Dreptul la ștergere ("dreptul de a fi uitat"):</strong> În
                anumite condiții, puteți solicita ștergerea datelor
              </li>
              <li>
                <strong>Dreptul la restricționarea prelucrării:</strong> Puteți
                solicita limitarea prelucrării datelor în anumite situații
              </li>
              <li>
                <strong>Dreptul la portabilitatea datelor:</strong> Puteți primi
                datele într-un format structurat pentru transfer la alt operator
              </li>
              <li>
                <strong>Dreptul la opoziție:</strong> Puteți să vă opuneți
                prelucrării datelor în scopuri de marketing
              </li>
              <li>
                <strong>Dreptul de a retrage consimțământul:</strong> Oricând,
                fără a afecta legalitatea prelucrării anterioare
              </li>
              <li>
                <strong>Dreptul de a depune o plângere:</strong> La Autoritatea
                Națională de Supraveghere a Prelucrării Datelor cu Caracter
                Personal (ANSPDCP)
              </li>
            </ul>

            <p className="text-gray-700 mb-6">
              Pentru a vă exercita drepturile, ne puteți contacta la:
              dpo@globalcredit.ro sau +40 21 234 5678
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              8. Securitatea Datelor
            </h2>
            <p className="text-gray-700 mb-6">
              Implementăm măsuri tehnice și organizatorice adecvate pentru a
              proteja datele dumneavoastră împotriva accesului neautorizat,
              pierderii sau distrugerii:
            </p>
            <ul className="list-disc pl-6 mb-6 text-gray-700 space-y-2">
              <li>Criptare SSL/TLS pentru transmiterea datelor</li>
              <li>Servere securizate în centre de date certificate</li>
              <li>Acces restricționat la datele personale (doar personal autorizat)</li>
              <li>Monitorizare și audituri de securitate regulate</li>
              <li>Backup-uri regulate și plan de recuperare în caz de dezastru</li>
            </ul>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">9. Cookies</h2>
            <p className="text-gray-700 mb-6">
              Website-ul nostru utilizează cookies pentru a îmbunătăți experiența
              utilizatorului. Cookie-urile sunt fișiere mici stocate pe dispozitivul
              dumneavoastră care ne ajută să analizăm traficul și să personalizăm
              conținutul. Puteți gestiona preferințele de cookies din setările
              browser-ului dumneavoastră.
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">
              10. Modificări ale Politicii
            </h2>
            <p className="text-gray-700 mb-6">
              Ne rezervăm dreptul de a actualiza această politică de
              confidențialitate pentru a reflecta modificările în practicile noastre
              sau în legislație. Vă vom notifica despre modificări semnificative
              prin email sau prin publicarea unui anunț pe website.
            </p>

            <Separator className="my-8" />

            <h2 className="text-[#003D7A] text-2xl mb-4">11. Contact</h2>
            <div className="bg-[#F5F7FA] p-6 rounded-xl mb-6">
              <p className="text-gray-700">
                Pentru întrebări despre această politică sau despre modul în care
                prelucram datele dumneavoastră:
                <br />
                <br />
                <strong>Responsabil Protecția Datelor (DPO)</strong>
                <br />
                Email: dpo@globalcredit.ro
                <br />
                Telefon: +40 21 234 5678
                <br />
                Adresă: Bd. Unirii 1, București, România
              </p>
            </div>

            <div className="bg-gradient-to-br from-[#003D7A] to-[#0066CC] p-8 rounded-xl text-center text-white mt-12">
              <h3 className="text-white mb-3 text-xl">
                Întrebări despre confidențialitate?
              </h3>
              <p className="text-gray-200 mb-6">
                Suntem transparenți și deschiși. Contactează-ne oricând!
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
