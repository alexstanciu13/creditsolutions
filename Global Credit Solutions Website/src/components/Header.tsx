import { useState, useEffect } from "react";
import { Globe, Menu, X } from "lucide-react";
import { Button } from "./ui/button";

export function Header() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 20);
    };

    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const navigate = (hash: string) => {
    window.location.hash = hash;
    setIsMobileMenuOpen(false);
  };

  return (
    <header
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        isScrolled ? "bg-white shadow-md py-3" : "bg-transparent py-4"
      }`}
    >
      <div className="container mx-auto px-4">
        <div className="flex items-center justify-between">
          {/* Logo */}
          <button
            onClick={() => navigate("home")}
            className="flex items-center gap-2"
          >
            <div
              className={`flex items-center justify-center w-10 h-10 rounded-full ${
                isScrolled ? "bg-[#003D7A]" : "bg-white"
              }`}
            >
              <Globe
                className={`w-6 h-6 ${
                  isScrolled ? "text-white" : "text-[#003D7A]"
                }`}
              />
            </div>
            <div>
              <div
                className={`transition-colors ${
                  isScrolled ? "text-[#003D7A]" : "text-white"
                }`}
              >
                Global Credit Solutions
              </div>
            </div>
          </button>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex items-center gap-8">
            <button
              onClick={() => navigate("home")}
              className={`transition-colors hover:text-[#0066CC] ${
                isScrolled ? "text-gray-700" : "text-white"
              }`}
            >
              Acasă
            </button>
            <button
              onClick={() => navigate("about")}
              className={`transition-colors hover:text-[#0066CC] ${
                isScrolled ? "text-gray-700" : "text-white"
              }`}
            >
              Despre Noi
            </button>
            <button
              onClick={() => navigate("services")}
              className={`transition-colors hover:text-[#0066CC] ${
                isScrolled ? "text-gray-700" : "text-white"
              }`}
            >
              Servicii
            </button>
            <button
              onClick={() => navigate("contact")}
              className={`transition-colors hover:text-[#0066CC] ${
                isScrolled ? "text-gray-700" : "text-white"
              }`}
            >
              Contact
            </button>
          </nav>

          {/* CTA Button */}
          <div className="hidden md:block">
            <Button
              onClick={() => navigate("contact")}
              className="bg-[#0066CC] hover:bg-[#0052A3] text-white rounded-lg transition-all"
            >
              Aplică Acum
            </Button>
          </div>

          {/* Mobile Menu Button */}
          <button
            className="md:hidden"
            onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
          >
            {isMobileMenuOpen ? (
              <X
                className={`w-6 h-6 ${
                  isScrolled ? "text-[#003D7A]" : "text-white"
                }`}
              />
            ) : (
              <Menu
                className={`w-6 h-6 ${
                  isScrolled ? "text-[#003D7A]" : "text-white"
                }`}
              />
            )}
          </button>
        </div>

        {/* Mobile Menu */}
        {isMobileMenuOpen && (
          <nav className="md:hidden mt-4 pb-4 flex flex-col gap-4 bg-white rounded-lg shadow-lg p-4">
            <button
              onClick={() => navigate("home")}
              className="text-gray-700 hover:text-[#0066CC] text-left"
            >
              Acasă
            </button>
            <button
              onClick={() => navigate("about")}
              className="text-gray-700 hover:text-[#0066CC] text-left"
            >
              Despre Noi
            </button>
            <button
              onClick={() => navigate("services")}
              className="text-gray-700 hover:text-[#0066CC] text-left"
            >
              Servicii
            </button>
            <button
              onClick={() => navigate("contact")}
              className="text-gray-700 hover:text-[#0066CC] text-left"
            >
              Contact
            </button>
            <Button
              onClick={() => navigate("contact")}
              className="bg-[#0066CC] hover:bg-[#0052A3] text-white rounded-lg w-full"
            >
              Aplică Acum
            </Button>
          </nav>
        )}
      </div>
    </header>
  );
}