import "./App.css";
import Content from "./components/content/Content.js";
import Header from "./components/header/Header.js";
import Navbar from "./components/navbar/Navbar.js";
import CustomerList from "./components/CustomerListe.jsx";

function App() {
  return (
    <div className="App">
      <div>On commence le fichier App.tsx</div>

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
  );
}

export default App;
