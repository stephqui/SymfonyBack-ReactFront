import type { Route } from "./+types/home";
import Navbar from "./navbar/Navbar";
import Header from "./header/Header";
import Content from "./content/Content";
import CustomerList from "./CustomerListe.jsx";

export function meta({}: Route.MetaArgs) {
  return [
    { title: "Mise à jour EBP" },
    { name: "description", content: "Ma première appli FullStack avec React!" },
  ];
}

export default function Home() {
  return (
    <>
      <div className="App">
        <div>On commence le fichier Home.tsx</div>

        <div className="left-menu">
          <Navbar />
        </div>
        <div className="container">
          <Header />
          <Content />
          <CustomerList onSelect={(c) => setSelected(p)} />
        </div>
        {/* We'll add our components here */}
      </div>
    </>
  );
}
