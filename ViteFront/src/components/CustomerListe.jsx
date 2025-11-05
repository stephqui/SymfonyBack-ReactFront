import { useEffect, useState } from "react";

export default function CustomerList({ onSelect }) {
  const [customers, setCustomer] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    fetch("/api/customers")
      .then(async (res) => {
        if (!res.ok) throw new Error(`HTTP ${res.status}`);
        return res.json();
      })
      .then((data) => setCustomer(data))
      .catch((err) => setError(err.message))
      .finally(() => setLoading(false));
  }, []);

  console.log("clients : " + customers);

  if (loading) return <p>Loading...</p>;
  if (error) return <p style={{ color: "crimson" }}>Error: {error}</p>;
  if (!customers.length) return <p>No products found.</p>;

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
          <div style={{ fontWeight: 600 }}>{c}</div>
          <div style={{ fontSize: 14, opacity: 0.8, marginTop: 4 }}>
            {c.produit}
          </div>
        </li>
      ))}
    </ul>
  );
}
