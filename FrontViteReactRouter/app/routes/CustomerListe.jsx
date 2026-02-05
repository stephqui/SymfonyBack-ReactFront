import { useEffect, useState } from "react";

export default function CustomerList({ onSelect }) {
  const [customers, setCustomer] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  async function getData() {
    //const baseApi = import.meta.env.VITE_API_URL;
    //const url = `${baseApi}/api/customers`;
    const url = "/api/customers";
    try {
      const response = await fetch(url);
      console.log(response);
      if (!response.ok) {
        throw new Error(`Response status: ${response.status}`);
      }

      const result = await response.json();
      setCustomer(result);
      console.log("result : " + result[12].slug);
    } catch (error) {
      console.error(error.message);
    }
  }
  useEffect(() => {
    getData();
  }, []);

  //if (loading) return <p>Loading...</p>;
  //if (error) return <p style={{ color: "crimson" }}>Error: {error}</p>;
  //if (!customers.length) return <p>No products found.</p>;

  return (
    <ul style={{ listStyle: "none", padding: 0, margin: 0 }}>
      {customers.map((c, i) => (
        <li
          key={i}
          onClick={() => onSelect?.(c)}
          style={{
            border: "1px solid #eee",
            borderRadius: 12,
            padding: "0.75rem 1rem",
            marginBottom: "0.75rem",
            cursor: "pointer",
          }}
        >
          <div style={{ fontWeight: 600 }}>{c.raison_sociale}</div>
          <div style={{ fontSize: 14, opacity: 0.8, marginTop: 4 }}>
            Produit : {c.produit} -- {c.licence}
          </div>
        </li>
      ))}
    </ul>
  );
}
