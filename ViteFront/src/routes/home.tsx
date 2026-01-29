import type { Route } from "./+types/home";
import { Welcome } from "../welcome/welcome";

export default function Home() {
  return (
    <>
      <div className="px-8 py-2">
        <h1 className="text-2xl font-bold">C'est le fichier home.tsx</h1>
        <ul>
          <li className="text-lg font-mono">
            <a href="/">Accueil</a>
          </li>
        </ul>
      </div>
    </>
  );
}
