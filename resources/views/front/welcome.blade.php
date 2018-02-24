@extends('front.layouts.app')

@section('content')
<div class="container">
    <div class="row">



    	<ais-index index-name="amine"
		           app-id="HWXPPMCJQX"
		           api-key="7bc327bd59390adb4a69da9b846adc16"
		           :query-parameters="{
		             distinct: true,
		             attributeForDistinct: 'product_id'
		           }"
		>
		  <!-- Add your InstantSearch components here. -->

		  <ais-search-box placeholder="Find products..."></ais-search-box>

			<ais-results>
			  <template slot-scope="{ result }">
			    <h2>
			      <a :href="result.url">
			        @{{ result.title }}
			      </a>
			    </h2>
			    <p>@{{ result.description }}</p>
			  </template>
			</ais-results>

		</ais-index>


    </div>
</div>
@endsection