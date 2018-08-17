
import Feed from '../components/feed/Show.vue'

const routes = [
  {
    path: '/', component: Feed,
    // children: [
    //     {path: 'login', component: LoginPage},
    //     {
    //         path: 'admin', component: AdminPage,
    //         // children: [
    //         //     {path: 'article', component: ArticleList},
    //         //     {path: 'article/create', component: ArticleCreate},
    //         //     {path: 'user', component: UserList},
    //         //     {path: 'user/create', component: UserCreate},
    //         //     {path: 'feed', component: FeedShow},
    //         //     {path: 'Log', component: LogShow},
    //         // ]
    //     }
    //]
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