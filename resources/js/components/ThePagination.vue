<template>
    <nav v-if="pagination.last_page !== 1">
        <ul class="pagination">
            <li class="page-item disabled" aria-disabled="true" aria-label="Previous" v-if="pagination.current_page === 1">
                <span aria-hidden="true" class="page-link">&lsaquo;</span>
            </li>
            <li class="page-item" v-else>
                <a @click="$parent.loadProducts($parent.selectedCategory, pagination.current_page-1)" rel="prev" aria-label="Previous" class="page-link">&lsaquo;</a>
            </li>

            <div v-for="element in elements" :key="element">
                <li class="page-item disabled" aria-disabled="true" v-if="typeof element == 'string'"><span class="page-link">{{ element }}</span></li>
                <div v-else>
                    <li class="page-item active" aria-current="page" v-if="element == pagination.current_page"><span class="page-link">{{ element }}</span></li>
                    <li class="page-item" v-else><a @click="$parent.loadProducts($parent.selectedCategory, element)" class="page-link">{{ element }}</a></li>
                </div>
            </div>

            <li class="page-item" v-if="pagination.next_page_url">
                <a  @click="$parent.loadProducts($parent.selectedCategory, pagination.current_page+1)" class="page-link" rel="next" aria-label="Next">&rsaquo;</a>
            </li>

            <li class="page-item disabled" aria-disabled="true" aria-label="Next" v-else>
                <span aria-hidden="true" class="page-link">&rsaquo;</span>
            </li>
        </ul>
    </nav>
</template>

<script>
import {pagination} from '../helpers/pagination'

export default {
    computed: {
        pagination () {
            return this.$parent.paginationData;
        },

        elements () {
            const {current_page, last_page} = this.pagination;
            return pagination(current_page, last_page);
        }
    }
}
</script>

<style scoped>
a {
    cursor: pointer;
}
.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
}
</style>
