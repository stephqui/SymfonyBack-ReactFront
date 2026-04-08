import { useEffect, useState } from "react";

export default function SoftwareList({ onSelect }) {
  const [softwares, setSoftware] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  async function getData() {
    const baseApi = import.meta.env.VITE_API_URL;
    const url = `${baseApi}/api/produits`;
    try {
      const response = await fetch(url);
      console.log(response);
      if (!response.ok) {
        throw new Error(`Response status: ${response.status}`);
      }

      const result = await response.json();
      setSoftware(result);
      console.log("result : " + result[2].slug);
    } catch (error) {
      console.error(error.message);
    } finally {
      setLoading(false);
    }
  }

  useEffect(() => {
    getData();
  }, []);

  if (loading) return <p>Loading...</p>;
  if (error) return <p style={{ color: "crimson" }}>Error: {error}</p>;
  if (!softwares.length) return <p>No products found.</p>;

  return (
    <ul style={{ listStyle: "none", padding: 0, margin: 0 }}>
      {softwares.map((s, i) => (
        <li key={i}>
          <h3>{s.name}</h3>
          <p>{s.description}</p>
        </li>
      ))}
    </ul>
  );
}
