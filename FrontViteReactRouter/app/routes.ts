import {
  type RouteConfig,
  index,
  layout,
  prefix,
  route,
} from "@react-router/dev/routes";
import { Layout } from "./root";

export default [
  index("routes/home.tsx"),
  //route("customers", "./routes/CustomerListe.jsx"),

  ...prefix("users", [
    layout("routes/CustomerListe.jsx", [index("routes/content/Content.tsx")]),
  ]),
] satisfies RouteConfig;
