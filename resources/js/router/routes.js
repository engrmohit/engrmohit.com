export default [
  {
    name: 'root',
    path: '',
    component: () => import('../views/Home.vue')
  },
  {
    name: 'home',
    path: '/home',
    component: () => import('../views/Home.vue')
  },
  {
    name: 'about',
    path: '/about',
    component: () => import('../views/About.vue')
  },
  {
    name: 'contact',
    path: '/contact',
    component: () => import('../views/contact.vue')
  },
  {
    name: 'portfolio',
    path: '/portfolio',
    component: () => import('../views/Projects.vue')
  },
  {
    name: 'portfolio.show',
    path: '/portfolio/:slug',
    component: () => import('../views/ProjectDetails.vue')
  }
]
