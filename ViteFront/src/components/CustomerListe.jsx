import { useEffect, useState } from "react";

export default function CustomerList({ onSelect }) {
  const [customers, setCustomer] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  /*const fetch =() => {
    const url = "http://localhost:8000/api/customers"
    try {
      const response = await

    }
  }*/
  async function getData() {
    const url = "http://localhost:8000/api/customers";
    try {
      const response = await fetch(url);
      if (!response.ok) {
        throw new Error(`Response status: ${response.status}`);
      }

      const result = await response.json();
      setCustomer(result);
      //console.log(result);
      //console.log("resultats : " + result);
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
    <div>
      {customers.map((customer, i) => (
        <div key={i}>
          <h3>{customer.slug}</h3>
          <p>{customer.license}</p>
        </div>
      ))}
    </div>
  );
}
