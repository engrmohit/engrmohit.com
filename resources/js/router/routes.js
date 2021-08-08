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
  }
]
