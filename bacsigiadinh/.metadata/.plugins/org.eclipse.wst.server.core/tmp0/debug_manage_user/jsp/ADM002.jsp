<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@page import="net.luvina.manageuser.entities.*" %>
<%@page import="net.luvina.manageuser.utils.*" %>
<%@page import ="java.util.ArrayList" %>
<%@page import="java.util.List"%>
<jsp:include page="header.jsp" />

<!-- Begin vung dieu kien tim kiem -->
<form action="ListUser.do" method="post" name="mainform">
	<!-- Begin Tag hidden -->
	<input type="hidden" name="page" value="1" />
	<!-- End Tag hidden -->
	<table  class="tbl_input" border="0" width="90%"  cellpadding="0" cellspacing="0" >
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td>
				Tìm kiếm nhân viên bằng tên. Nếu không có điều kiện, thì hiện thị toàn bộ.
			</td>
		</tr>
		<tr>
			<td width="100%">
				<table class="tbl_input" cellpadding="4" cellspacing="0" >
					<tr>
						<td class="lbl_left">Tên:</td>
						<td align="left">
						<input class="txBox" type="text" name="full_name" value="<%= request.getAttribute("full_name") %>"
							size="20" onfocus="this.style.borderColor='#0066ff';"
							onblur="this.style.borderColor='#aaaaaa';" />
						</td>
						<td></td>
					</tr>
					<tr>
						<td class="lbl_left">Nhóm:</td>
						<td align="left" width="80px">
							<select name="group_id">
								<option value="0">Tất cả</option>
								<%
									if(request.getAttribute("listGroup") != null) {
									List<TblGroup> groups = new ArrayList<TblGroup>();
									groups = (ArrayList<TblGroup>) request.getAttribute("listGroup");
									for (TblGroup group : groups) {
								%>
								<option value="<%= group.getId() %>" ><%=group.getName() %></option>
								<%
									}
									}
								%>
							</select>
						</td>
						<td align="left">
							<input class="btn" type="submit" value="Tìm kiếm" />
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!-- End vung dieu kien tim kiem -->
</form>
	<!-- Begin vung hien thi danh sach user -->
	<table class="tbl_list" border="1" cellpadding="4" cellspacing="0" width="80%">
		<%
		if (request.getAttribute("message") != null && request.getAttribute("message").toString().length() > 0) {
		%>
		 <tr>
			<td class="errMsg"><%= request.getAttribute("message").toString() %></td>
		</tr>
		<%
		} else {
		%>
		<tr class="tr2">
			<th align="center" width="40px">
				ID
			</th>
			<th align="left">
			<!-- Sart fix bug -->
				Ten
			<!-- End fix bug -->
			</th>
			<th align="left">
				Nhóm
			</th>
			<th align="left">
				Email
			</th>
			<th align="left" width="70px">
				Điện thoại
			</th>
		</tr>
		<%
			if(request.getAttribute("listUser") != null) {
			List<TblUser> users = new ArrayList<TblUser>();
			users = (ArrayList<TblUser>) request.getAttribute("listUser");
			for (TblUser user : users) {
		%>
		<tr>
			<td align="right">
				<a href='javascript:editUser(<%= user.getId()%>)'><%= user.getId() %></a>
			</td>
			<td>
				<%= Common.escapeHTML(user.getFullName()) %>
			</td>
			<td>
				<%= Common.escapeHTML(user.getGroupName()) %>
			</td>
			<td>
				<%= user.getEmail() %>
			</td>
			<td>
				<%= user.getTel() %>
			</td>
		</tr>
		<%
			}
			}
		}
		%>
	</table>
	<!-- End vung hien thi danh sach user -->

	<!-- Begin vung paging -->
	<table>
		<tr>
			<td class = "lbl_paging"><%= request.getAttribute("strPaging") %></td>
		</tr>
	</table>
	<!-- End vung paging -->

<jsp:include page="footer.jsp" />