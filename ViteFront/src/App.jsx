import { useState } from "react";
import "./App.css";
import ProductList from "./components/ProductList";
import CustomerList from "./components/CustomerListe";

export default function App() {
  const [selected, setSelected] = useState(null);

  return (
    <main
      style={{ maxWidth: 900, margin: "2rem auto", fontFamily: "system-ui" }}
    >
      <h1 style={{ marginBottom: "1rem" }}>Products</h1>
      <div>
        <section>
          <ProductList onSelect={(p) => setSelected(p)} />
          <CustomerList onSelect={(c) => setSelected(p)} />
        </section>
      </div>
    </main>
  );
}
