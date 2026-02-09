import "./Content.css";
import CustomerList from "../CustomerListe.jsx";

const Content = () => {
  return (
    <>
      <div className="content">
        <h3>Fichier content.tsx Liste des clients</h3>
        <CustomerList onSelect={(c) => setSelected(p)} />
      </div>
    </>
  );
};

export default Content;
