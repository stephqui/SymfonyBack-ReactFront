import {
  type RouteConfig,
  index,
  layout,
  prefix,
  route,
} from "@react-router/dev/routes";
import { Layout } from "./root";

export default [
  //index("routes/GlobalPage.tsx"),

  // route("customers", "routes/CustomerListe.jsx"), Pas deux fois le même fichier, sinon ça ne compile pas, et de toute façon c'est déjà dans le layout
  route("customers", "routes/home/Home.tsx"),

  ...prefix("customers", [
    layout("routes/GlobalPage.tsx",  { id: "layout-customers" },[
      index("routes/customer/CustomerListe.jsx"),
      //Faut corriger la ligne:
      route(":userSlug", "routes/customer/Content.tsx", { id: "customer-customers" }),
    ]),
  ]),

  ...prefix("softwares", [
    layout("routes/GlobalPage.tsx", { id: "layout-softwares" }, [
      index("routes/software/SoftwareListe.jsx"),
      //Faut corriger la ligne:
      route(":softwareSlug", "routes/software/Content2.tsx", { id: "software-softwares" }),
    ]),
  ]),
] satisfies RouteConfig;
