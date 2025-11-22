import { Globe, Phone, Mail, MapPin, Facebook, Instagram, Linkedin } from "lucide-react";
import { Button } from "./ui/button";
import { Input } from "./ui/input";

export function Footer() {
  const quickLinks = [
    { label: "Acasă", href: "home" },
    { label: "Despre Noi", href: "about" },
    { label: "Servicii", href: "services" },
    { label: "Contact", href: "contact" },
  ];

  const serviceLinks = [
    { label: "Credite Nevoi Personale", href: "services" },
    { label: "Credit Ipotecar/Prima Casă", href: "services" },
    { label: "Credite Auto/Leasing", href: "services" },
    { label: "Credite Persoane Juridice", href: "services" },
    { label: "Refinanțări", href: "services" },
    { label: "Alte Servicii", href: "services" },
  ];

  const handleNewsletterSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    // Handle newsletter submission
  };

  const navigate = (hash: string) => {
    window.location.hash = hash;
  };

  return (
    <footer id="footer" className="bg-[#003D7A] text-white pt-16 pb-8">
      <div className="container mx-auto px-4">
        {/* Main Footer Content */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
          {/* Column 1: Company Info */}
          <div>
            <div className="flex items-center gap-2 mb-4">
              <div className="flex items-center justify-center w-10 h-10 bg-white rounded-full">
                <Globe className="w-6 h-6 text-[#003D7A]" />
              </div>
              <span>Global Credit Solutions</span>
            </div>
            <p className="text-gray-300 text-sm mb-6">
              Broker de credite autorizat ANPC. Te ajutăm să găsești cele mai
              bune oferte de creditare din piață, rapid și eficient.
            </p>
            <div className="flex gap-3">
              <a
                href="#"
                className="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors"
                aria-label="Facebook"
              >
                <Facebook className="w-5 h-5" />
              </a>
              <a
                href="#"
                className="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors"
                aria-label="Instagram"
              >
                <Instagram className="w-5 h-5" />
              </a>
              <a
                href="#"
                className="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors"
                aria-label="LinkedIn"
              >
                <Linkedin className="w-5 h-5" />
              </a>
            </div>
          </div>

          {/* Column 2: Quick Links */}
          <div>
            <h3 className="text-white mb-4 text-lg">Link-uri Rapide</h3>
            <ul className="space-y-3">
              {quickLinks.map((link, index) => (
                <li key={index}>
                  <button
                    onClick={() => navigate(link.href)}
                    className="text-gray-300 hover:text-white transition-colors text-sm"
                  >
                    {link.label}
                  </button>
                </li>
              ))}
            </ul>
          </div>

          {/* Column 3: Services */}
          <div>
            <h3 className="text-white mb-4 text-lg">Servicii</h3>
            <ul className="space-y-3">
              {serviceLinks.map((link, index) => (
                <li key={index}>
                  <button
                    onClick={() => navigate(link.href)}
                    className="text-gray-300 hover:text-white transition-colors text-sm"
                  >
                    {link.label}
                  </button>
                </li>
              ))}
            </ul>
          </div>

          {/* Column 4: Contact & Newsletter */}
          <div>
            <h3 className="text-white mb-4 text-lg">Contact</h3>
            <ul className="space-y-3 mb-6">
              <li>
                <a
                  href="tel:+40212345678"
                  className="flex items-center gap-2 text-gray-300 hover:text-white transition-colors text-sm"
                >
                  <Phone className="w-4 h-4" />
                  <span>+40 21 234 5678</span>
                </a>
              </li>
              <li>
                <a
                  href="mailto:contact@globalcredit.ro"
                  className="flex items-center gap-2 text-gray-300 hover:text-white transition-colors text-sm"
                >
                  <Mail className="w-4 h-4" />
                  <span>contact@globalcredit.ro</span>
                </a>
              </li>
              <li>
                <div className="flex items-start gap-2 text-gray-300 text-sm">
                  <MapPin className="w-4 h-4 flex-shrink-0 mt-1" />
                  <span>Bd. Unirii 1, București</span>
                </div>
              </li>
              <li className="text-gray-300 text-sm">
                <strong>Program:</strong> Luni - Vineri
                <br />
                09:00 - 18:00
              </li>
            </ul>

            {/* Newsletter */}
            <div>
              <p className="text-sm text-gray-300 mb-3">
                Abonează-te la newsletter:
              </p>
              <form onSubmit={handleNewsletterSubmit} className="space-y-2">
                <Input
                  type="email"
                  placeholder="Email-ul tău"
                  className="bg-white/10 border-white/20 text-white placeholder:text-gray-400"
                  required
                />
                <Button
                  type="submit"
                  className="w-full bg-[#0066CC] hover:bg-[#0052A3] text-white"
                >
                  Abonează-te
                </Button>
              </form>
            </div>
          </div>
        </div>

        {/* Bottom Footer */}
        <div className="border-t border-white/10 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center gap-4">
            <div className="text-sm text-gray-300 text-center md:text-left">
              © 2025 Global Credit Solutions. Toate drepturile rezervate.
            </div>
            <div className="flex flex-wrap justify-center gap-6 text-sm text-gray-300">
              <button
                onClick={() => navigate("privacy")}
                className="hover:text-white transition-colors"
              >
                Politică de Confidențialitate
              </button>
              <button
                onClick={() => navigate("terms")}
                className="hover:text-white transition-colors"
              >
                Termeni și Condiții
              </button>
              <button
                onClick={() => navigate("gdpr")}
                className="hover:text-white transition-colors"
              >
                GDPR
              </button>
            </div>
          </div>

          <div className="mt-4 text-xs text-gray-400 text-center">
            Global Credit Solutions este înregistrat ca intermediar în creditare
            conform OUG 52/2016. Autorizație ANPC Nr. XXXXX/2023
          </div>
        </div>
      </div>
    </footer>
  );
}