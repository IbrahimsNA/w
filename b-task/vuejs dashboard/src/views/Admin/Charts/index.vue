<template>
  <div>
 <h1>Charts page</h1>
      <!-- <canvas id="planet-chart"></canvas> -->
      <div class="col-md-4">
        <chart :options="chartOptionsBar"></chart>
      </div>
      <div class="col-md-6">
            <chart :options="chartOptionsLine"></chart>
      </div>
      
</div>
</template>

<script>

export default {
  data: () => ({
    
chartOptionsBar: {
  xAxis: {
    data: ['Q1', 'Q2', 'Q3', 'Q4']
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      type: 'bar',
      data: [63, 75, 24, 92]
    }
  ]


}
,
chartOptionsLine: {
  xAxis: {
    data: ["Q1", "Q2", "Q3", "Q4"]
  },
  yAxis: {
    type: "value"
  },
  series: [
    {
      type: "line",
      data: [63, 75, 24, 92]
    }
  ],

  color: ["#127ac2"]
}

  })
}
</script>

<style>

</style>
