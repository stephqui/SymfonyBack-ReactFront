import { useState } from "react";
import "./Navbar.css";
import { Link } from "react-router";

interface NavItem {
  id: string;
  label: string;
  icon: string;
  urlNav: string;
}

const Navbar = () => {
  const [activeItem, setActiveItem] = useState("home");
  const baseApi = import.meta.env.VITE_API_URL;

  const navItems: NavItem[] = [
    { id: "home", label: "Home", icon: "🏠", urlNav: "/" },
    {
      id: "customers",
      label: "Clients",
      icon: "📊",
      urlNav: "customers",
    },
    { id: "softwares", label: "Logiciels", icon: "📈", urlNav: "/" },
    {
      id: "partner",
      label: "Prestataire informatique",
      icon: "⚙️",
      urlNav: "/",
    },
  ];

  return (
    <nav className="navbar">
      <div className="navbar-brand">
        <h2>Fichier NavBar.tsx - Mise à jour EBP</h2>
      </div>
      <ul className="navbar-menu">
        {navItems.map((item) => (
          <li
            key={item.id}
            className={`navbar-item ${activeItem === item.id ? "active" : ""}`}
            onClick={() => setActiveItem(item.id)}
          >
            <Link to={item.urlNav}></Link>
            <span className="navbar-icon">{item.icon}</span>
            <span className="navbar-label">{item.label}</span>
          </li>
        ))}
      </ul>
    </nav>
  );
};

export default Navbar;
