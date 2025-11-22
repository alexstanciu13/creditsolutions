import { HeroSection } from "../components/HeroSection";
import { TrustSignals } from "../components/TrustSignals";
import { ServicesGrid } from "../components/ServicesGrid";
import { ProcessSteps } from "../components/ProcessSteps";
import { Benefits } from "../components/Benefits";
import { CTASection } from "../components/CTASection";
import { FAQSection } from "../components/FAQSection";
import { ContactForm } from "../components/ContactForm";
import { Testimonials } from "../components/Testimonials";

export function HomePage() {
  return (
    <>
      <HeroSection />
      <TrustSignals />
      <ServicesGrid />
      <ProcessSteps />
      <Benefits />
      <Testimonials />
      <ContactForm />
      <FAQSection />
      <CTASection />
    </>
  );
}