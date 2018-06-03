import ArticleCreate from '../components/article/Create.vue';
import ArticleList from '../components/article/List.vue';
// import Home from '../pages/Home.vue';
// import Timer from '../pages/timer/Timer.vue';
// import ExamVuex from '../pages/exam-vuex/Exam-vuex.vue';

const routes = [
  { path: '/admin/article', component: ArticleList
  // ,children:[
  //   {path: '/create', component: ArticleCreate}
  // ]
},
  { path: '/admin/article/create', component: ArticleCreate},
  // { path: '/about', component: About },
  // { path: '/timer', component: Timer },
  // { path: '/exam-vuex', component: ExamVuex }
]
export default routes