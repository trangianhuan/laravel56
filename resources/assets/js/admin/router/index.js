import ArticleCreate from '../components/article/Create.vue';
import ArticleList from '../components/article/List.vue';
import LoginPage from '../components/Login.vue';
import MainApp from '../components/MainApp.vue'
import AdminPage from '../components/AdminPage.vue'

import UserCreate from '../components/user/Create.vue';
import UserList from '../components/user/List.vue';

const routes = [
  {
    path: '/', component: MainApp,
    children: [
        {path: 'login', component: LoginPage},
        {
            path: 'admin', component: AdminPage,
            children: [
                {path: 'article', component: ArticleList},
                {path: 'article/create', component: ArticleCreate},
                {path: 'user', component: UserList},
                {path: 'user/create', component: UserCreate},
            ]
        }
    ]
  }
  // { path: '/admin', component: LoginPage},
  // { path: '/admin/article', component: ArticleList
  // ,children:[
  //   {path: '/create', component: ArticleCreate}
  // ]
  // { path: '/admin/article/create', component: ArticleCreate},
  // { path: '/about', component: About },
  // { path: '/timer', component: Timer },
  // { path: '/exam-vuex', component: ExamVuex }
]
export default routes