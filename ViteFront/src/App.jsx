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

/*import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function App() {
  const [count, setCount] = useState(0)

  return (
    <>
      <div>
        <a href="https://vite.dev" target="_blank">
          <img src={viteLogo} className="logo" alt="Vite logo" />
        </a>
        <a href="https://react.dev" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
      </div>
      <h1>Vite + React</h1>
      <div className="card">
        <button onClick={() => setCount((count) => count + 1)}>
          count is {count}
        </button>
        <p>
          Edit <code>src/App.jsx</code> and save to test HMR
        </p>
      </div>
      <p className="read-the-docs">
        Click on the Vite and React logos to learn more
      </p>
    </>
  )
}

export default App
*/
