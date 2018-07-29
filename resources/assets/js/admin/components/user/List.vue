<template>
    <div class="main col-xs-9 offset-xs-3 col-md-10 offset-md-2 ui container" id="main-part">
        <filter-bar></filter-bar>

        <vuetable ref="vuetable_user"
            api-url="http://laravel56.local.com/api/user"
            :fields="fields"
            :sort-order="sortOrder"
            :css="css.table"
            pagination-path=""
            :per-page="5"
            :append-params="moreParams"
            @vuetable:pagination-data="onPaginationData"
        ></vuetable>

        <vuetable-pagination ref="pagination"
            @vuetable-pagination:change-page="onChangePage"
            :css="css.pagination"
        ></vuetable-pagination>
    </div>
</template>
<script>
import Vuetable from 'vuetable-2/src/components/Vuetable'
import VuetablePagination from 'vuetable-2/src/components/VuetablePagination'
import FilterBar from '../FilterBar'

export default {
  components: {
    Vuetable,
    VuetablePagination,
    FilterBar
  },
  data() {
    return{
        fields:[
            {
              name: 'name',
              sortField: 'name',
              title: 'Name'
            },
            {
              name: 'email',
              sortField: 'email',
              title: 'Email'
            }
        ],
        sortOrder: [
            { field: 'name', direction: 'desc' }
        ],
        css: {
            table: {
                tableClass: 'table table-striped table-bordered table-hovered',
                loadingClass: 'loading',
                ascendingIcon: 'glyphicon glyphicon-chevron-up',
                descendingIcon: 'glyphicon glyphicon-chevron-down',
                handleIcon: 'glyphicon glyphicon-menu-hamburger',
            },
            pagination: {
                infoClass: 'pull-left',
                wrapperClass: 'vuetable-pagination text-center',
                activeClass: 'btn-primary',
                disabledClass: 'disabled',
                pageClass: 'btn btn-border',
                linkClass: 'btn btn-border',
                icons: {
                    first: 'fa fa-angle-double-left icon',
                    prev: 'fa fa-chevron-left icon',
                    next: 'fa fa-chevron-right  icon',
                    last: 'fa fa-angle-double-right icon',
                },
            }
        },
        moreParams: {}
    }
  },
  mounted() {
    this.$events.$on('filter-set', eventData => this.onFilterSet(eventData))
    this.$events.$on('filter-reset', e => this.onFilterReset())
  },
  beforeDestroy() {
    this.$events.$off("filter-set");
    this.$events.$off("filter-reset");
  },
  methods:{
    onPaginationData (paginationData) {
      this.$refs.pagination.setPaginationData(paginationData)
    },
    onChangePage (page) {
      this.$refs.vuetable_user.changePage(page)
    },
    onFilterSet (filterText) {
        var that = this;
        this.moreParams = {
            'filter': filterText
        }
        Vue.nextTick( () => that.$refs.vuetable_user.refresh())
    },
    onFilterReset () {
        var that = this;
        this.moreParams = {}
        Vue.nextTick( () => that.$refs.vuetable_user.refresh())
    }
  }
}
</script>