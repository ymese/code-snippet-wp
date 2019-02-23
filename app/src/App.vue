<template>
	<form>
		OAuth Token: <br/>
		<input type="text" name="oauth-token" v-model="oauthToken"/>
		<br/><br/>
		<input type="submit" value="Save changes" v-on:click="save"/>
	</form>
</template>

<script>
	export default {
		name: "app",
		data() {
			return {
				oauthToken: '',
			}
		},
		methods: {
			save: function (evt) {
				evt.preventDefault();
				// Call settings API
				console.log('OAuth token', this.oauthToken);
			}
		}
	}
</script>

<style scoped>

</style>
