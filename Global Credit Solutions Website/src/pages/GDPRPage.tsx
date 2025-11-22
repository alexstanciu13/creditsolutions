import { Lock, ArrowLeft, Download, Mail } from "lucide-react";
import { Button } from "../components/ui/button";
import { Separator } from "../components/ui/separator";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "../components/ui/card";

export function GDPRPage() {
  const rights = [
    {
      title: "Dreptul de Acces",
      description: "Poți solicita o copie a tuturor datelor personale pe care le deținem despre tine.",
      action: "Solicită acces la date",
    },
    {
      title: "Dreptul la Rectificare",
      description: "Poți cere corectarea datelor personale inexacte sau incomplete.",
      action: "Solicită rectificare",
    },
    {
      title: "Dreptul la Ștergere",
      description: "În anumite condiții, poți solicita ștergerea datelor tale personale.",
      action: "Solicită ștergere",
    },
    {
      title: "Dreptul la Restricționare",
      description: "Poți solicita limitarea prelucrării datelor tale în anumite situații.",
      action: "Solicită restricționare",
    },
    {
      title: "Dreptul la Portabilitate",
      description: "Poți primi datele într-un format structurat pentru transfer la alt operator.",
      action: "Solicită portabilitate",
    },
    {
      title: "Dreptul la Opoziție",
      description: "Te poți opune prelucrării datelor tale în scopuri de marketing direct.",
      action: "Opune-te prelucrării",
    },
  ];

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
              <Lock className="w-8 h-8" />
            </div>
            <h1 className="mb-4 text-3xl md:text-4xl">
              Centrul GDPR
            </h1>
            <p className="text-xl text-gray-200 mb-4">
              Controlul complet asupra datelor tale personale
            </p>
            <p className="text-gray-300">
              Global Credit Solutions respectă Regulamentul General privind
              Protecția Datelor (GDPR). Aici poți să îți exerciți drepturile.
            </p>
          </div>
        </div>
      </section>

      {/* Quick Info */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="max-w-4xl mx-auto">
            <div className="bg-[#F5F7FA] p-8 rounded-xl mb-12">
              <h2 className="text-[#003D7A] mb-4 text-2xl">
                Ce este GDPR?
              </h2>
              <p className="text-gray-700 mb-4">
                Regulamentul General privind Protecția Datelor (GDPR) este o
                legislație a Uniunii Europene care protejează drepturile tale în
                ceea ce privește datele personale. Acesta îți oferă control asupra
                modului în care organizațiile colectează, folosesc și stochează
                informațiile tale.
              </p>
              <p className="text-gray-700">
                La Global Credit Solutions, conformitatea cu GDPR nu este doar o
                obligație legală, ci un angajament față de transparență și
                respectarea intimității tale.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Rights Cards */}
      <section className="py-16 bg-[#F5F7FA]">
        <div className="container mx-auto px-4">
          <div className="max-w-6xl mx-auto">
            <div className="text-center mb-12">
              <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">
                Drepturile Tale GDPR
              </h2>
              <p className="text-gray-600 max-w-2xl mx-auto">
                Conform GDPR, ai următoarele drepturi în legătură cu datele tale
                personale:
              </p>
            </div>

            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
              {rights.map((right, index) => (
                <Card key={index} className="hover:shadow-lg transition-shadow">
                  <CardHeader>
                    <CardTitle className="text-[#003D7A]">
                      {right.title}
                    </CardTitle>
                    <CardDescription className="text-base">
                      {right.description}
                    </CardDescription>
                  </CardHeader>
                  <CardContent>
                    <Button
                      variant="outline"
                      className="w-full border-[#0066CC] text-[#0066CC] hover:bg-[#0066CC] hover:text-white"
                      onClick={() => window.location.hash = "contact"}
                    >
                      {right.action}
                    </Button>
                  </CardContent>
                </Card>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* How to Exercise Rights */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="max-w-4xl mx-auto">
            <h2 className="text-[#003D7A] mb-8 text-2xl md:text-3xl text-center">
              Cum Îți Exerciți Drepturile
            </h2>

            <div className="space-y-6">
              <Card>
                <CardHeader>
                  <div className="flex items-center gap-3">
                    <div className="flex items-center justify-center w-10 h-10 bg-[#0066CC]/10 rounded-full">
                      <span className="text-[#0066CC]">1</span>
                    </div>
                    <CardTitle className="text-[#003D7A]">
                      Trimite o Cerere
                    </CardTitle>
                  </div>
                </CardHeader>
                <CardContent>
                  <p className="text-gray-700 mb-4">
                    Contactează-ne prin email sau telefon și precizează ce drept
                    dorești să exerciți. Te vom ghida prin proces.
                  </p>
                  <div className="flex flex-wrap gap-3">
                    <Button
                      variant="outline"
                      onClick={() => window.location.href = "mailto:dpo@globalcredit.ro"}
                    >
                      <Mail className="mr-2 w-4 h-4" />
                      dpo@globalcredit.ro
                    </Button>
                    <Button variant="outline">
                      <Download className="mr-2 w-4 h-4" />
                      Descarcă Formular
                    </Button>
                  </div>
                </CardContent>
              </Card>

              <Card>
                <CardHeader>
                  <div className="flex items-center gap-3">
                    <div className="flex items-center justify-center w-10 h-10 bg-[#0066CC]/10 rounded-full">
                      <span className="text-[#0066CC]">2</span>
                    </div>
                    <CardTitle className="text-[#003D7A]">
                      Verificare Identitate
                    </CardTitle>
                  </div>
                </CardHeader>
                <CardContent>
                  <p className="text-gray-700">
                    Pentru securitatea ta, vom verifica identitatea înainte de a
                    procesa cererea. Este posibil să îți cerem o copie a actului de
                    identitate sau alte documente de identificare.
                  </p>
                </CardContent>
              </Card>

              <Card>
                <CardHeader>
                  <div className="flex items-center gap-3">
                    <div className="flex items-center justify-center w-10 h-10 bg-[#0066CC]/10 rounded-full">
                      <span className="text-[#0066CC]">3</span>
                    </div>
                    <CardTitle className="text-[#003D7A]">
                      Procesare și Răspuns
                    </CardTitle>
                  </div>
                </CardHeader>
                <CardContent>
                  <p className="text-gray-700">
                    Vom procesa cererea ta în maximum 30 de zile de la primirea
                    tuturor informațiilor necesare. În cazuri complexe, perioada
                    poate fi extinsă cu încă 60 de zile, cu notificarea ta.
                  </p>
                </CardContent>
              </Card>
            </div>
          </div>
        </div>
      </section>

      {/* Data We Collect */}
      <section className="py-16 bg-[#F5F7FA]">
        <div className="container mx-auto px-4">
          <div className="max-w-4xl mx-auto">
            <h2 className="text-[#003D7A] mb-8 text-2xl md:text-3xl text-center">
              Ce Date Colectăm
            </h2>
            <div className="grid md:grid-cols-2 gap-6">
              <Card>
                <CardHeader>
                  <CardTitle className="text-[#003D7A]">
                    Date de Identificare
                  </CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-2 text-gray-700">
                    <li>• Nume și prenume</li>
                    <li>• CNP</li>
                    <li>• Date CI/pașaport</li>
                    <li>• Data nașterii</li>
                  </ul>
                </CardContent>
              </Card>

              <Card>
                <CardHeader>
                  <CardTitle className="text-[#003D7A]">
                    Date de Contact
                  </CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-2 text-gray-700">
                    <li>• Adresă email</li>
                    <li>• Număr telefon</li>
                    <li>• Adresă domiciliu</li>
                    <li>• Adresă corespondență</li>
                  </ul>
                </CardContent>
              </Card>

              <Card>
                <CardHeader>
                  <CardTitle className="text-[#003D7A]">
                    Date Financiare
                  </CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-2 text-gray-700">
                    <li>• Venituri și cheltuieli</li>
                    <li>• Istoric credit</li>
                    <li>• Informații angajator</li>
                    <li>• Active și datorii</li>
                  </ul>
                </CardContent>
              </Card>

              <Card>
                <CardHeader>
                  <CardTitle className="text-[#003D7A]">
                    Date de Navigare
                  </CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-2 text-gray-700">
                    <li>• Adresă IP</li>
                    <li>• Tip browser</li>
                    <li>• Pagini vizitate</li>
                    <li>• Cookie-uri</li>
                  </ul>
                </CardContent>
              </Card>
            </div>
          </div>
        </div>
      </section>

      {/* Contact DPO */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl mx-auto">
            <div className="bg-gradient-to-br from-[#003D7A] to-[#0066CC] p-8 md:p-12 rounded-2xl text-center text-white">
              <Lock className="w-16 h-16 mx-auto mb-6" />
              <h2 className="text-white mb-4 text-2xl md:text-3xl">
                Contactează Responsabilul cu Protecția Datelor
              </h2>
              <p className="text-xl text-gray-200 mb-8">
                Pentru orice întrebare despre GDPR sau datele tale personale,
                contactează-ne direct.
              </p>
              <div className="bg-white/10 p-6 rounded-xl mb-8">
                <p className="text-white">
                  <strong>Data Protection Officer (DPO)</strong>
                  <br />
                  Email: dpo@globalcredit.ro
                  <br />
                  Telefon: +40 21 234 5678
                  <br />
                  Program: Luni - Vineri, 09:00 - 18:00
                </p>
              </div>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <Button
                  size="lg"
                  className="bg-white text-[#003D7A] hover:bg-gray-100"
                  onClick={() => window.location.href = "mailto:dpo@globalcredit.ro"}
                >
                  <Mail className="mr-2 w-5 h-5" />
                  Trimite Email
                </Button>
                <Button
                  size="lg"
                  variant="outline"
                  className="border-2 border-white text-white bg-transparent hover:bg-white hover:text-[#003D7A]"
                  onClick={() => window.location.hash = "contact"}
                >
                  Formular Contact
                </Button>
              </div>
            </div>

            <Separator className="my-12" />

            <div className="text-center">
              <p className="text-gray-600 mb-4">
                <strong>Ai dreptul să depui o plângere</strong>
              </p>
              <p className="text-gray-600">
                Dacă consideri că drepturile tale GDPR au fost încălcate, poți
                depune o plângere la Autoritatea Națională de Supraveghere a
                Prelucrării Datelor cu Caracter Personal (ANSPDCP).
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
