import Admin from "../../views/Admin/index.vue";
import Charts from "../../views/Admin/Charts/index.vue";

export default [
  {
    path: "/admin",
    component: Admin,
    name: "admin",
    children: [
      {
        path: "Charts",
        component: Charts,
        name: "Charts",
      },
    ]
    
  },
]