import { useEffect, useState } from "react";

export default function ProductList({ onSelect }) {
  const [products, setProducts] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    fetch("api/products")
      .then(async (res) => {
        if (!res.ok) throw new Error(`HTTP ${res.status}`);
        return res.json();
      })
      .then((data) => setProducts(data))
      .catch((err) => setError(err.message))
      .finally(() => setLoading(false));
  }, []);

  if (loading) return <p>Loading...</p>;
  if (error) return <p style={{ color: "crimson" }}>Error: {error}</p>;
  if (!products.length) return <p>No products found.</p>;

  return (
    <ul style={{ listStyle: "none", padding: 0, margin: 0 }}>
      {products.map((p, i) => (
        <li
          key={i}
          onClick={() => onSelect?.(p)}
          style={{
            border: "1px solid #eee",
            borderRadius: 12,
            padding: "0.75rem 1rem",
            marginBottom: "0.75rem",
            cursor: "pointer",
          }}
        >
          <div style={{ fontWeight: 600 }}>{p.title}</div>
          <div style={{ fontSize: 14, opacity: 0.8, marginTop: 4 }}>
            {p.description}
          </div>
        </li>
      ))}
    </ul>
  );
}
