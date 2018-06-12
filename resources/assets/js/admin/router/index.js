import ArticleCreate from '../components/article/Create.vue';
import ArticleList from '../components/article/List.vue';
import LoginPage from '../components/Login.vue';
import MainApp from '../components/MainApp.vue'
import AdminPage from '../components/AdminPage.vue'
// import Home from '../pages/Home.vue';
// import Timer from '../pages/timer/Timer.vue';
// import ExamVuex from '../pages/exam-vuex/Exam-vuex.vue';

const routes = [
  {
    path: '/', component: MainApp,
    children: [
        {path: 'login', component: LoginPage},
        {
            path: 'admin', component: AdminPage,
            children: [
                {path: 'index', component: ArticleList}
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