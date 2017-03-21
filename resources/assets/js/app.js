
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./lity');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('od-card', {
	props: ['name', 'avatar', 'type', 'address', 'vehicle'],

	template: `
		<div class="panel panel-default">
			<div class="panel-heading">
				{{ name }} | <strong>{{ type }}</strong>
				<slot name="delete"></slot>
				<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
				<slot name="update"></slot>
				<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
				<slot name="view"></slot>
			</div>
			<div class="panel-body">
				<div class="pull-right"><slot></slot></div>
				<div class="form-group">
					<label for="address" class="control-label">Address: </label>
					<div id="address" name="address">{{ address }}</div>
				</div>
				<div class="form-group">
					<label for="vehicle" class="control-label">Assigned Vehicle: </label>
					<div id="vehicle" name="vehicle">{{ vehicle }}</div>
				</div>
			</div>
		</div>
	`
});

Vue.component('ra-card', {
	props: ['name', 'avatar', 'type', 'address', 'payment'],

	template: `
		<div class="panel panel-default">
			<div class="panel-heading">
				{{ name }} | <strong>{{ type }}</strong>
				<slot name="delete"></slot>
				<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
				<slot name="update"></slot>
				<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
				<slot name="view"></slot>
			</div>
			<div class="panel-body">
				<div class="pull-right"><slot></slot></div>
				<div class="form-group">
					<label for="address" class="control-label">Address: </label>
					<div id="address" name="address">{{ address }}</div>
				</div>
				<div class="form-group">
					<label for="payment" class="control-label">Total Payments: </label>
					<div id="payment" name="payment">{{ payment }}</div>
				</div>
			</div>
		</div>
	`
});

Vue.component('vehicle-card', {
	props: ['operator', 'chasis', 'type', 'plate', 'date'],

	template: `
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>{{ plate }}</strong> | {{ chasis }}
				<slot name="delete"></slot>
				<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
				<slot name="update"></slot>
				<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
				<slot name="view"></slot>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="operator" class="control-label">Owned By: </label>
					<div id="operator" name="operator">{{ operator }}</div>
				</div>
				<div class="form-group">
					<label for="type" class="control-label">Body Type: </label>
					<div id="type" name="type">{{ type }}</div>
				</div>
				<div class="form-group">
					<label for="date" class="control-label">Management Agreement Date: </label>
					<div id="date" name="date">{{ date }}</div>
				</div>
			</div>
		</div>
	`
});
// Vue.component('member-panel', require('./components/Example.vue'));
// Vue.component('vehicle-panel', require('./components/Example.vue'));
const datacard = new Vue({
	el: '#data-card'
});
