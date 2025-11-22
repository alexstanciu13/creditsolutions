import { useState } from "react";
import { MapPin, Phone, Mail, Clock, Send, MessageSquare } from "lucide-react";
import { Button } from "../components/ui/button";
import { Input } from "../components/ui/input";
import { Textarea } from "../components/ui/textarea";
import { Label } from "../components/ui/label";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "../components/ui/select";

export function ContactPage() {
  const [formData, setFormData] = useState({
    name: "",
    cnp: "",
    email: "",
    creditType: "",
    message: "",
  });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    // Handle form submission
    alert("Formularul a fost trimis cu succes! Vă vom contacta în curând.");
    setFormData({
      name: "",
      cnp: "",
      email: "",
      creditType: "",
      message: "",
    });
  };

  const contactInfo = [
    {
      icon: Phone,
      title: "Telefon",
      content: "+40 21 234 5678",
      link: "tel:+40212345678",
    },
    {
      icon: Mail,
      title: "Email",
      content: "contact@globalcredit.ro",
      link: "mailto:contact@globalcredit.ro",
    },
    {
      icon: MapPin,
      title: "Adresă",
      content: "Bd. Unirii 1, București, România",
      link: "https://maps.google.com",
    },
    {
      icon: Clock,
      title: "Program",
      content: "Luni - Vineri: 09:00 - 18:00",
      link: null,
    },
  ];

  const offices = [
    {
      city: "București",
      address: "Bd. Unirii 1, Sector 3",
      phone: "+40 21 234 5678",
      email: "bucuresti@globalcredit.ro",
    },
    {
      city: "Cluj-Napoca",
      address: "Str. Memorandumului 28",
      phone: "+40 264 123 456",
      email: "cluj@globalcredit.ro",
    },
    {
      city: "Timișoara",
      address: "Bd. Revoluției 1989, Nr. 3",
      phone: "+40 256 123 456",
      email: "timisoara@globalcredit.ro",
    },
    {
      city: "Iași",
      address: "Str. Lăpușneanu 26",
      phone: "+40 232 123 456",
      email: "iasi@globalcredit.ro",
    },
  ];

  const faqs = [
    {
      question: "Ce documente sunt necesare?",
      answer: "Documentele necesare variază în funcție de tipul de credit, dar de obicei includem CI/BI, acte venit, și documente specifice fiecărui tip de credit.",
    },
    {
      question: "Pot obține credit cu istoric negativ?",
      answer: "Da, avem soluții pentru orice problemă. Lucrăm și cu instituții care analizează fiecare caz individual și oferim consultanță pentru ștergerea istoricului negativ.",
    },
  ];

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-[#003D7A] to-[#001f3f] pt-32 pb-16 md:pt-40 md:pb-24">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl mx-auto text-center text-white">
            <h1 className="mb-6 text-3xl md:text-4xl lg:text-5xl">
              Contactează-ne
            </h1>
            <p className="text-xl text-gray-200 mb-8">
              Suntem aici pentru tine! Completează formularul sau contactează-ne
              telefonic. Îți răspundem în maxim 2 ore.
            </p>
          </div>
        </div>
      </section>

      {/* Contact Info Cards */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            {contactInfo.map((info, index) => (
              <div
                key={index}
                className="bg-[#F5F7FA] p-6 rounded-xl text-center hover:shadow-lg transition-shadow"
              >
                <div className="inline-flex items-center justify-center w-14 h-14 bg-[#0066CC]/10 rounded-full mb-4">
                  <info.icon className="w-7 h-7 text-[#0066CC]" />
                </div>
                <h3 className="text-[#003D7A] mb-2">{info.title}</h3>
                {info.link ? (
                  <a
                    href={info.link}
                    className="text-gray-700 hover:text-[#0066CC] transition-colors"
                  >
                    {info.content}
                  </a>
                ) : (
                  <p className="text-gray-700">{info.content}</p>
                )}
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact Form & Map */}
      <section className="py-16 bg-[#F5F7FA]">
        <div className="container mx-auto px-4">
          <div className="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            {/* Contact Form */}
            <div className="bg-white p-8 rounded-xl shadow-lg">
              <div className="flex items-center gap-3 mb-6">
                <div className="flex items-center justify-center w-12 h-12 bg-[#0066CC]/10 rounded-lg">
                  <MessageSquare className="w-6 h-6 text-[#0066CC]" />
                </div>
                <h2 className="text-[#003D7A] text-xl md:text-2xl">
                  Trimite-ne un mesaj
                </h2>
              </div>
              <form onSubmit={handleSubmit} className="space-y-6">
                <div>
                  <Label htmlFor="name">Nume complet *</Label>
                  <Input
                    id="name"
                    type="text"
                    placeholder="Ionescu Ion"
                    value={formData.name}
                    onChange={(e) =>
                      setFormData({ ...formData, name: e.target.value })
                    }
                    required
                    className="mt-2"
                  />
                </div>

                <div>
                  <Label htmlFor="cnp">CNP/CUI *</Label>
                  <Input
                    id="cnp"
                    type="text"
                    placeholder="1234567890123"
                    value={formData.cnp}
                    onChange={(e) =>
                      setFormData({ ...formData, cnp: e.target.value })
                    }
                    required
                    className="mt-2"
                  />
                </div>

                <div>
                  <Label htmlFor="email">Email</Label>
                  <Input
                    id="email"
                    type="email"
                    placeholder="ion@example.com"
                    value={formData.email}
                    onChange={(e) =>
                      setFormData({ ...formData, email: e.target.value })
                    }
                    className="mt-2"
                  />
                </div>

                <div>
                  <Label htmlFor="creditType">Tipuri de credit *</Label>
                  <Select
                    value={formData.creditType}
                    onValueChange={(value) =>
                      setFormData({ ...formData, creditType: value })
                    }
                  >
                    <SelectTrigger className="mt-2">
                      <SelectValue placeholder="Selectează tipul de credit" />
                    </SelectTrigger>
                    <SelectContent>
                      <SelectItem value="nevoi">Credite de Nevoi Personale</SelectItem>
                      <SelectItem value="ipotecar">Credit Ipotecar/Prima Casă</SelectItem>
                      <SelectItem value="auto">Credite Auto/Leasing</SelectItem>
                      <SelectItem value="juridic">Credite/Linii de Credit pentru Persoane Juridice</SelectItem>
                      <SelectItem value="refinantare">Refinanțări de Credit</SelectItem>
                      <SelectItem value="altele">Alte Servicii</SelectItem>
                    </SelectContent>
                  </Select>
                </div>

                <div>
                  <Label htmlFor="message">Mesaj</Label>
                  <Textarea
                    id="message"
                    placeholder="Descrie-ne nevoile tale și cum te putem ajuta..."
                    rows={5}
                    value={formData.message}
                    onChange={(e) =>
                      setFormData({ ...formData, message: e.target.value })
                    }
                    className="mt-2"
                  />
                </div>

                <Button
                  type="submit"
                  size="lg"
                  className="w-full bg-[#0066CC] hover:bg-[#0052A3] text-white"
                >
                  <Send className="mr-2 w-5 h-5" />
                  Trimite Mesajul
                </Button>

                <p className="text-sm text-gray-600 text-center">
                  Prin trimiterea formularului, ești de acord cu{" "}
                  <button
                    type="button"
                    onClick={() => window.location.hash = "privacy"}
                    className="text-[#0066CC] hover:underline"
                  >
                    Politica de Confidențialitate
                  </button>
                </p>
              </form>
            </div>

            {/* Map Placeholder & Quick Info */}
            <div className="space-y-6">
              {/* Map */}
              <div className="bg-white rounded-xl shadow-lg overflow-hidden h-64">
                <div className="w-full h-full bg-gradient-to-br from-[#003D7A]/10 to-[#0066CC]/10 flex items-center justify-center">
                  <div className="text-center text-gray-500">
                    <MapPin className="w-12 h-12 mx-auto mb-2 text-[#0066CC]" />
                    <p>Hartă interactivă</p>
                    <p className="text-sm">Bd. Unirii 1, București</p>
                  </div>
                </div>
              </div>

              {/* FAQ Quick */}
              <div className="bg-white p-8 rounded-xl shadow-lg">
                <h3 className="text-[#003D7A] mb-4 text-lg">
                  Întrebări Frecvente
                </h3>
                <div className="space-y-4">
                  {faqs.map((faq, index) => (
                    <div key={index}>
                      <h4 className="text-[#003D7A] text-sm mb-1">
                        {faq.question}
                      </h4>
                      <p className="text-gray-600 text-sm">{faq.answer}</p>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Offices */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="text-center mb-12">
            <h2 className="text-[#003D7A] mb-4 text-2xl md:text-3xl">
              Birourile Noastre
            </h2>
            <p className="text-gray-600 max-w-2xl mx-auto">
              Avem birouri în principalele orașe din România. Vizitează-ne sau
              contactează-ne telefonic.
            </p>
          </div>
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            {offices.map((office, index) => (
              <div
                key={index}
                className="bg-[#F5F7FA] p-6 rounded-xl hover:shadow-lg transition-shadow"
              >
                <h3 className="text-[#003D7A] mb-4">{office.city}</h3>
                <div className="space-y-3 text-sm text-gray-600">
                  <div className="flex items-start gap-2">
                    <MapPin className="w-4 h-4 flex-shrink-0 mt-0.5 text-[#0066CC]" />
                    <span>{office.address}</span>
                  </div>
                  <div className="flex items-center gap-2">
                    <Phone className="w-4 h-4 text-[#0066CC]" />
                    <a
                      href={`tel:${office.phone}`}
                      className="hover:text-[#0066CC]"
                    >
                      {office.phone}
                    </a>
                  </div>
                  <div className="flex items-center gap-2">
                    <Mail className="w-4 h-4 text-[#0066CC]" />
                    <a
                      href={`mailto:${office.email}`}
                      className="hover:text-[#0066CC]"
                    >
                      {office.email}
                    </a>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
}