import { useState } from "react";
import { Send, MessageSquare } from "lucide-react";
import { Button } from "./ui/button";
import { Input } from "./ui/input";
import { Textarea } from "./ui/textarea";
import { Label } from "./ui/label";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "./ui/select";

export function ContactForm() {
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

  return (
    <section id="contact-form" className="py-16 bg-white">
      <div className="container mx-auto px-4">
        <div className="max-w-2xl mx-auto">
          <div className="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            <div className="flex items-center gap-3 mb-6">
              <div className="flex items-center justify-center w-12 h-12 bg-[#0066CC]/10 rounded-lg">
                <MessageSquare className="w-6 h-6 text-[#0066CC]" />
              </div>
              <h2 className="text-[#003D7A] text-xl md:text-2xl">
                Aplică pentru un Credit
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
                  <SelectTrigger id="creditType" className="mt-2">
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
                Trimite Cererea
              </Button>

              <p className="text-sm text-gray-600 text-center">
                Prin trimiterea formularului, ești de acord cu{" "}
                <button
                  type="button"
                  onClick={() => (window.location.hash = "privacy")}
                  className="text-[#0066CC] hover:underline"
                >
                  Politica de Confidențialitate
                </button>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  );
}
