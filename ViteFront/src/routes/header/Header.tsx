import { useState } from "react";
import { FaSearch, FaBell, FaUserCircle } from "react-icons/fa";
import "./Header.css";

const Header = () => {
  const [searchQuery, setSearchQuery] = useState("");

  return (
    <header className="header">
      <div className="search-container">
        <FaSearch className="search-icon" />
        <input
          type="text"
          placeholder="Search dashboards, metrics..."
          value={searchQuery}
          onChange={(e) => setSearchQuery(e.target.value)}
          className="search-input"
        />
      </div>
      <div>fichier Header.tsx</div>
      <div className="header-actions">
        <button className="icon-button">
          <FaBell />
          <span className="notification-badge">3</span>
        </button>
        <button className="icon-button">
          <FaUserCircle size={24} />
        </button>
      </div>
    </header>
  );
};

export default Header;
