<div class="delivery-estimate-box">
    <i class="fas fa-truck"></i>
    <span>{!! BaseHelper::clean($estimate['formatted']) !!}</span>
</div>

<style>
.delivery-estimate-box {
    padding: 10px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    margin: 15px 0;
    display: flex;
    align-items: center;
    gap: 10px;
    background-color: #f9f9f9;
}

.delivery-estimate-box i {
    color: #4CAF50;
}
</style> 