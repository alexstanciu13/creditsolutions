import { useState, useEffect } from "react";

type Page = "home" | "about" | "services" | "contact" | "terms" | "privacy" | "gdpr";

interface RouterContextType {
  currentPage: Page;
  navigate: (page: Page, data?: any) => void;
  pageData?: any;
}

const RouterContext = {
  currentPage: "home" as Page,
  navigate: (_page: Page, _data?: any) => {},
  pageData: undefined as any,
};

export function useRouter(): RouterContextType {
  const [currentPage, setCurrentPage] = useState<Page>("home");
  const [pageData, setPageData] = useState<any>();

  useEffect(() => {
    // Handle initial route
    const hash = window.location.hash.slice(1) || "home";
    setCurrentPage(hash as Page);

    // Handle hash changes
    const handleHashChange = () => {
      const hash = window.location.hash.slice(1) || "home";
      setCurrentPage(hash as Page);
      window.scrollTo(0, 0);
    };

    window.addEventListener("hashchange", handleHashChange);
    return () => window.removeEventListener("hashchange", handleHashChange);
  }, []);

  const navigate = (page: Page, data?: any) => {
    setPageData(data);
    setCurrentPage(page);
    window.location.hash = page;
    window.scrollTo(0, 0);
  };

  return { currentPage, navigate, pageData };
}

export { RouterContext };
export type { Page };