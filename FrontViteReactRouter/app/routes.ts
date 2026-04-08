import {
  type RouteConfig,
  index,
  layout,
  prefix,
  route,
} from "@react-router/dev/routes";
import { Layout } from "./root";

export default [
  index("routes/GlobalPage.tsx"),
  
  // route("customers", "routes/CustomerListe.jsx"), Pas deux fois le même fichier, sinon ça ne compile pas, et de toute façon c'est déjà dans le layout 
route("customers", "routes/home/Home.tsx"),

  ...prefix("users", [
    layout("routes/CustomerListe.jsx", [
      index("routes/CustomerIndex.tsx"),
      route(":userSlug","routes/content/Content.tsx"),
    ]),
  ]),
] satisfies RouteConfig;
