<template>
    <div class="main col-xs-9 offset-xs-3 col-md-10 offset-md-2 ui container" id="main-part">
        <vuetable ref="vuetable"
            api-url="https://vuetable.ratiw.net/api/users"
            :fields="fields"
            :sort-order="sortOrder"
            :css="css.table"
            pagination-path=""
            :per-page="5"
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

export default {
  components: {
    Vuetable,
    VuetablePagination
  },
  data() {
    return{
        fields:[
            'name', 'email', 'birthdate',
            {
              name: 'address.line1',
              sortField: 'address.line1',
              title: 'Address 1'
            },
            {
              name: 'address.line2',
              sortField: 'address.line2',
              title: 'Address 2'
            },
            {
              name: 'address.zipcode',
              title: 'Zipcode'
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
        }
    }
  },
  methods:{
    onPaginationData (paginationData) {
      this.$refs.pagination.setPaginationData(paginationData)
    },
    onChangePage (page) {
      this.$refs.vuetable.changePage(page)
    }
  }
}
</script>