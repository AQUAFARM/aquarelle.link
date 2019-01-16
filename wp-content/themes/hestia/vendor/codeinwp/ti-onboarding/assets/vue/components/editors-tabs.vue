<template>
	<tabs>
		<!-- Uncomment the following lines if you want to enable the tab with all the templates -->
		<!--<tab name="all">-->
			<!--<div class="template-serach-wrapper">-->
			<!--<input type="text" v-model="search" v-bind:placeholder="strings.search + '...'" class="template-serach">-->
			<!--</div>-->
			<!--<div class="templates-wrapper">-->
				<!--<template v-for="(editor_sites, site_editor) in sites.local">-->
					<!--<div v-for="site in filterTemplates(editor_sites)" >-->
						<!--<SiteItem :site_data="site"></SiteItem>-->
					<!--</div>-->
				<!--</template>-->

				<!--<template v-for="(editor_sites, site_editor) in sites.remote">-->
					<!--<div v-for="site in filterTemplates(editor_sites)" >-->
						<!--<SiteItem :site_data="site"></SiteItem>-->
					<!--</div>-->
				<!--</template>-->

				<!--<template v-for="(editor_sites, site_editor) in sites.upsell">-->
					<!--<div v-for="site in filterTemplates(editor_sites)" >-->
						<!--<SiteItem :site_data="site"></SiteItem>-->
					<!--</div>-->
				<!--</template>-->
			<!--</div>-->
		<!--</tab>-->
		<template v-for="editor in editors">
			<tab v-bind:name="editor">
				<!-- To enable search in tab, uncomment the following lines -->
				<!--<div class="template-serach-wrapper">-->
					<!--<input type="text" v-model="search" v-bind:placeholder="strings.search + '...'" class="template-serach">-->
				<!--</div>-->
				<div class="templates-wrapper">
					<template v-for="(editor_sites, site_editor) in sites.local">
						<div v-if="site_editor===editor" v-for="site in filterTemplates(editor_sites)" >
							<SiteItem :site_data="site"></SiteItem>
						</div>
					</template>

					<template v-for="(editor_sites, site_editor) in sites.remote">
						<div v-if="site_editor===editor" v-for="site in filterTemplates(editor_sites)" >
							<SiteItem :site_data="site"></SiteItem>
						</div>
					</template>

					<template v-for="(editor_sites, site_editor) in sites.upsell">
						<div v-if="site_editor===editor" v-for="site in filterTemplates(editor_sites)" >
							<SiteItem :site_data="site"></SiteItem>
						</div>
					</template>
				</div>
			</tab>
		</template>
	</tabs>
</template>

<script>
	import Tab from './tab.vue';
	import Tabs from './tabs.vue';
	import SiteItem from './site-item.vue'

	export default {
		name: 'editors-tabs',
		data: function () {
			return {
				strings: this.$store.state.strings,
				search: "",
			}
		},
		computed: {
			editors: function () {
				return this.$store.state.sitesData.editors
			},
			sites: function () {
				return this.$store.state.sitesData
			},
		},
		methods: {
			filterTemplates: function ( sites ) {
				let result = {};
				Object.keys( sites ).forEach( key => {
					const item = sites[ key ];
					if ( item.title.toLowerCase().indexOf( this.search.toLowerCase() ) > -1 ) {
						result[ key ] = item;
					}
				} );
				return result;
			},
		},
		components: {
			Tab,
			Tabs,
			SiteItem
		}
	}
</script>